<?php
if( !defined('IN') ) die('bad request');
require(AROOT.'/lib/vendor/autoload.php');
class createEmailController
{
    function __construct()
    {

    }


    function index()
    {
        require(AROOT.'/view/getContent.php');

    }

    function create(){
        $url_1=$_POST['url-1'];
        $url_2=$_POST['url-2'];
        $url_3=$_POST['url-3'];
        $word_1=$_POST['word-1'];
        $word_2=$_POST['word-2'];
        $city=$_POST['city'];
        $data[0]= $this->getData($url_1);
        $data[1]= $this->getData( $url_2);
        $data[2]= $this->getData($url_3);
        $word['1']=$word_1;
        $word['2']=$word_2;

/*      $data[0]= $this->getData('http://www.xiangcaozhaopin.com/weixin/jd/147697?_ch=cd.yy.sem.16080901');
        $data[1]= $this->getData('http://www.xiangcaozhaopin.com/weixin/jd/147697?_ch=cd.yy.sem.16080901');
        $data[2]= $this->getData('http://www.xiangcaozhaopin.com/weixin/jd/147697?_ch=cd.yy.sem.16080901');
        $word['1']='你想成为国内最大的在线社区的缔造者？全国互联网行业专利拥有量居首的创新者？并期望与国内国际牛人为伍？拥有工作与生活的平衡？加入腾讯。成都欢迎您！';
        $word['2']='腾讯新建成都大楼，只有你想不到的福利待遇，免费班车，免费夜宵、免费体检、年度旅游、带薪年假、节日礼物、员工Q点、社团活动、部门活动等等，晋升有道，待遇你无需担心。';*/
        $html=require(AROOT.'/data/'.$city.'.php');

        $content=$this->replaceHtml($html,$data,$word,1);
        $filepath=AROOT.'/cache/'.md5($content).'.php';
        $this->write($content,$filepath);
        $message['status']=1;
        $message['data']=$filepath;
        echo json_encode($message);
        //  require(AROOT.'/view/getContent.php');
    }

    function preview(){
        $filepath=$_GET['filepath'];
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
        require($filepath);
    }


    function write($content,$filepath){
        $myfile = fopen($filepath, "w");
        fwrite($myfile, $content);
        fclose($myfile);
    }

    function replaceHtml($html,$data,$word='',$c=0){
        if($word){
            $html=mb_ereg_replace('%%word-1%%',$word['1'],$html);
            $html=mb_ereg_replace('%%word-2%%',$word['2'],$html);
        }
        $i=0;
        foreach($data as $one){
            $html=mb_ereg_replace('%%url-'.$i.'%%',$one['url'],$html);
            $html=mb_ereg_replace('%%name-'.$i.'%%',$one['name'],$html);
            $html=mb_ereg_replace('%%payment-'.$i.'%%',$one['pay'],$html);
            $html=mb_ereg_replace('%%company-'.$i.'%%',$one['company'],$html);
            if($i==0){
                $html=mb_ereg_replace('%%img%%',$one['img'],$html);
            }
            if($c==1){
                $html=mb_ereg_replace('%%img-'.$i.'%%',$one['img'],$html);
            }
            $i++;
        }
        return $html;
    }


    function getData($url){
        $content=file_get_contents($url);
        $oDom = new \HtmlParser\ParserDom($content);
        $data=array();
        $data['name']=$this->getJobName($oDom);
        $data['pay']=$this->getJobPay($oDom);
        $data['company']=$this->getCompany($oDom);
        $data['img']=$this->getImg($oDom);
        $data['url']=$url;
        return $data;

    }

    function getJobName($oDom){
        return $oDom->find('.scd-ztt-text .col3',0)->getPlainText();
    }


    function getJobPay($oDom){
        return  $oDom->find('.scd-ztt-text .colf04',0)->getPlainText();
    }

    function getCompany($oDom){
        return  $oDom->find('.ci-h-iright .oneover',0)->getPlainText();
    }

    function getImg($oDom){
        $str=$oDom->find('.ci-h-info .bod-h70',0)->getAttr('style');
        $str=explode('(',$str)[1];
        $str=explode(')',$str)[0];
        $str=mb_ereg_replace('@120w_120h.src','',$str);
        return $str;
    }
}