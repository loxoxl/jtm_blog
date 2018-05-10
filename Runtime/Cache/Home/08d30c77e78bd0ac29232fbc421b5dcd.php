<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo (C("WEB_NAME")); ?></title>
<meta name="keywords" content="<?php echo (C("WEB_KEYWORDS")); ?>"/>
<meta name="description" content="<?php echo (C("WEB_DESCRIPTION")); ?>"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="baidu-site-verification" content="0DW3jOXXNz" />
<meta name="author" content="lizhengmeng,<?php echo (C("ADMIN_EMAIL")); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/blog/Public/static/icon/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/blog/Public/static/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/blog/Public/static/bootstrap-3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/blog/Public/static/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/blog/Public/static/css/bjy.css">
    <link rel="stylesheet" type="text/css" href="/blog/Template/default/Home/Public/css/index.css">
<link rel="stylesheet" type="text/css" href="/blog/Public/static/css/animate.css">

</head>
<body>
<header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
<!-- 背景动画 -->
<!-- <canvas id="c_n9" width="1920" height="990" style="position: fixed; top: 0px; left: 0px; z-index: -1; opacity: 0.5;"></canvas>
<script src="/blog/Public/static/js/canvas-nest.min.js"></script> -->
<!-- 背景动画 -->
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/" onclick="recordId('/',0)">
        <div class="hidden-xs b-nav-background">
        </div>
        <ul class="b-logo-code">
            <li class="b-lc-start">&lt;?php</li>
            <li class="b-lc-echo">echo</li>
        </ul>
        <p class="b-logo-word">
            '爵特猛博客'
        </p>
        <p class="b-logo-end">
            ;?>
        </p>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav b-nav-parent">
            <li class="hidden-xs b-nav-mobile"></li>
            <li class="b-nav-cname <?php if(($cid) == "index"): ?>b-nav-active<?php endif; ?> " > <a href="/" onclick="recordId('/',0)">首页</a></li>
            <?php if(is_array($categorys)): foreach($categorys as $key=>$v): ?><li class="b-nav-cname <?php if(($cid) == $v['cid']): ?>b-nav-active<?php endif; ?> "> <a href="<?php echo U('Index/category',array('cid'=>$v['cid']));?>" onclick="return recordId('cid',<?php echo ($v['cid']); ?>)"><?php echo ($v['cname']); ?></a></li><?php endforeach; endif; ?>
            <li class="b-nav-cname <?php if(($cid) == "chat"): ?>b-nav-active<?php endif; ?> "> <a href="<?php echo U('/chat');?>">随言碎语</a></li>
            <li class="b-nav-cname <?php if(($cid) == "play"): ?>b-nav-active<?php endif; ?> "> <a href="<?php echo U('/play');?>">小玩意儿</a></li>
            <!-- <li class="b-nav-cname hidden-sm <?php if(($cid) == "git"): ?>b-nav-active<?php endif; ?> "> <a href="<?php echo U('/git');?>">开源项目</a></li> -->
        </ul>
        <ul id="b-login-word" class="nav navbar-nav navbar-right">
            <?php if(empty($_SESSION['user']['head_img'])): ?><li class="b-nav-cname b-nav-login">
            <div class="hidden-xs b-login-mobile">
            </div>
            <a href="javascript:;" onclick="login()">登录</a></li>
            <?php else: ?>
            <li class="b-user-info">
                <span>
                    <img class="b-head_img" src="<?php echo ($_SESSION['user']['head_img']); ?>" alt="<?php echo ($_SESSION['user']['nickname']); ?>" title="<?php echo ($_SESSION['user']['nickname']); ?>"/>
                </span>
                <span class="b-nickname"><?php echo ($_SESSION['user']['nickname']); ?></span>
                <span><a href="javascript:;" onclick="logout()">退出</a></span>
            </li><?php endif; ?>
        </ul>
    </div>
</div>
</header>
<div class="b-h-70">
</div>
<div id="b-content" class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-8">
    <?php if(!empty($title_word)): ?><div class="row b-tag-title">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <h2><?php echo ($title_word); ?></h2>
        </div>
    </div><?php endif; ?>
    <?php if(is_array($articles)): foreach($articles as $key=>$v): ?><div class="row b-one-article">
        <h3 class="col-xs-12 col-md-12 col-lg-12"><a class="b-oa-title" href="<?php echo ($v['url']); ?>" target="_blank" onclick="return recordId('<?php echo ($v['extend']['type']); ?>',<?php echo ($v['extend']['id']); ?>)"><?php echo ($v['title']); ?></a></h3>
        <div class="col-xs-12 col-md-12 col-lg-12 b-date">
            <ul class="row">
                <li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> <?php echo ($v['author']); ?></li>
                <li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> <?php echo ($v['addtime']); ?></li>
                <li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i><a href="<?php echo U('Home/Index/category',array('cid'=>$v['cid']));?>" target="_blank"><?php echo ($v['category']['cname']); ?></a>
                <li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i><?php if(is_array($v['tag'])): foreach($v['tag'] as $key=>$n): ?><a class="b-tag-name" href="<?php echo U('Home/Index/tag',array('tid'=>$n['tid']));?>" target="_blank"><?php echo ($n['tname']); ?></a><?php endforeach; endif; ?></li>
            </ul>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
                    <figure class="b-oa-pic b-style1">
                        <a href="<?php echo ($v['url']); ?>" target="_blank">
                            <img src="<?php echo ($v['pic_path']); ?>" alt="<?php echo (C("IMAGE_TITLE_ALT_WORD")); ?>" title="<?php echo (C("IMAGE_TITLE_ALT_WORD")); ?>">
                        </a>
                        <figcaption><a href="<?php echo ($v['url']); ?>" target="_blank"></a></figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 b-des-read">
                     <?php echo ($v['description']); ?>
                </div>
            </div>
        </div>
        <a class=" b-readall" href="<?php echo ($v['url']); ?>" target="_blank">阅读全文</a>
    </div><?php endforeach; endif; ?>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 b-page">
             <?php echo ($page); ?>
        </div>
    </div>
</div>
        <div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
    <div class="b-tags">
        <h4 class="b-title">热门标签</h4>
        <ul class="b-all-tname">
            <?php $tag_i=0; if(is_array($tags)): foreach($tags as $k=>$v): $tag_i++; $tag_i=$tag_i==5?1:$tag_i; ?>
            <li class="b-tname"><a class="tstyle-<?php echo ($tag_i); ?>" href="<?php echo U('Home/Index/tag',array('tid'=>$v['tid']));?>" onclick="return recordId('tid',<?php echo ($v['tid']); ?>)"><?php echo ($v['tname']); ?> (<?php echo ($v['count']); ?>)</a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="b-recommend">
        <h4 class="b-title">置顶推荐</h4>
        <p class="b-recommend-p">
            <?php if(is_array($recommend)): foreach($recommend as $key=>$v): ?><a class="b-recommend-a" href="<?php echo U('Home/Index/article',array('aid'=>$v['aid']));?>" target="_blank"><span class="fa fa-th-list b-black"></span> <?php echo ($v['title']); ?></a><?php endforeach; endif; ?>
        </p>
    </div>
    <div class="b-link">
        <h4 class="b-title">最新评论</h4>
        <div>
            <?php if(is_array($new_comment)): foreach($new_comment as $key=>$v): ?><ul class="b-new-comment <?php if(($key) == "0"): ?>b-new-commit-first<?php endif; ?>"> <img class="b-head-img js-head-img" src="/blog/Template/default/Home/Public/image/qq_default.jpg" _src="<?php echo ($v['head_img']); ?>" alt="<?php echo ($v['nickname']); ?>">
                <li class="b-nickname"> <?php echo ($v['nickname']); ?><span><?php echo ($v['date']); ?></span></li>
                <li class="b-nc-article"> 在<a href="<?php echo U('Home/Index/article',array('aid'=>$v['aid']));?>" target="_blank"><?php echo ($v['title']); ?></a>中评论</li>
                <li class="b-content"> <?php echo ($v['content']); ?></li>
            </ul><?php endforeach; endif; ?>
        </div>
    </div>
    <?php if(($show_link) == "1"): ?><div class="b-link">
        <h4 class="b-title">友情链接</h4>
        <p>
            <?php if(is_array($links)): foreach($links as $k=>$v): ?><a class="b-link-a" href="<?php echo ($v[url]); ?>" target="_blank"><span class="fa fa-link b-black"></span> <?php echo ($v['lname']); ?></a><?php endforeach; endif; ?>
        </p>
    </div><?php endif; ?>
    <div class="b-search">
        <form class="form-inline" role="form" action="<?php echo U('Home/Index/search');?>" method="get">
            <input class="b-search-text" type="text" name="search_word"><input class="b-search-submit" type="submit" value="全站搜索">
        </form>
    </div>
</div>
    </div>
    <div class="row">
        <footer id="b-foot" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<ul>
    <li class="text-center">© 2017-2018 lizhengmeng.club 版权所有 ICP证：桂ICP备17006323号</li>
    <li class="text-center"> 联系邮箱：<?php echo (C("ADMIN_EMAIL")); ?>
        <!-- 站长统计开始 -->
        <script type="text/javascript">
            var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cspan id='cnzz_stat_icon_1273611319'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1273611319%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <!-- 站长统计结束 -->
    </li>
</ul>
<div class="b-h-20">
</div>
<a class="go-top fa fa-angle-up animated jello" href="javascript:;" onclick="goTop()"></a>
</footer>


    </div>
</div>
<div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                <ul class="row">
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a href="<?php echo U('Home/User/oauth_login',array('type'=>'qq'));?>"><img src="/blog/Template/default/Home/Public/image/qq-login.png" alt="QQ登录" title="QQ登录"></a></li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a href="<?php echo U('Home/User/oauth_login',array('type'=>'sina'));?>"><img src="/blog/Template/default/Home/Public/image/sina-login.png" alt="微博登录" title="微博登录"></a></li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a href="<?php echo U('Home/User/oauth_login',array('type'=>''));?>"><img src="" alt="待定" title="待定"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="/blog/Public/static/js/jquery-2.0.0.min.js"></script>
<script>
    logoutUrl="<?php echo U('Home/User/logout');?>";
</script>
<script src="/blog/Public/static/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="/blog/Public/static/js/html5shiv.min.js"></script>
<script src="/blog/Public/static/js/respond.min.js"></script>
<![endif]-->
<script src="/blog/Public/static/pace/pace.min.js"></script>
<script src="/blog/Template/default/Home/Public/js/index.js"></script>
<!-- 百度页面自动提交开始 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- 百度页面自动提交结束 -->

<!-- 百度统计开始 -->

<!-- 百度统计结束 -->


</body>
</html>