<?php
    include 'define.php';
//    $link = @mysqli_connect(SQLSRC, USERNAME, USERWORD, SQLNAME, SQLNUM);
    $link = conn();
    if (mysqli_connect_errno($link)) {
        echo '数据库连接失败' . mysqli_connect_error($link);
    }
    $activesql = "SELECT * FROM active_list";
    $activebool = mysqli_query($link, $activesql);
    $activeclasssql = "SELECT * FROM activeclass_list";
    $activeclassbool = mysqli_query($link, $activeclasssql);
    $commentsql = "SELECT * FROM comment_list";
    $commentbool = mysqli_query($link, $commentsql);
    $friendshipsql = "SELECT * FROM friendship_list";
    $friendshipbool = mysqli_query($link, $friendshipsql);
    $messagesql = "SELECT * FROM message_list";
    $messagebool = mysqli_query($link, $messagesql);
    $usersql = "SELECT * FROM user_list";
    $userbool = mysqli_query($link, $usersql);
    if (!$activebool&&!$activeclassbool&&!$commentbool&&!$friendshipbool&&!$messagebool&&!$userbool) {
        echo '操作失败';
        exit();
    }
//    mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="../css/sxqBOKE.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="bgbox"></div>
        <div class="maxbox">
            <div class="goback">
                <p></p>
            </div>
            <div class="header">
                <div class="h_name">
                    <p>SXQ`s</p>
                    <p class="h_boke">
                        &nbsp;&nbsp;BLOGS
                    </p>
                </div>
                <p class="h_word">
                    A little bit of progress every day .
                </p>
            </div>
            <div class="minbox">
                <ul class="m_tab">
                    <li>首页</li>
                    <li>技术杂谈</li>
                    <li>生活随笔</li>
                    <li>福利专区</li>
                    <li>关于自己</li>
                    <li>给我留言</li>
                    <li>提问交流</li>
                </ul>
                <div class="m_content">
                    <div class="m_c_left">
                        <div class="m_c_max">
                            <div class="m_c_list list1">
                                <div class="m_c_3d">
                                    <div class="m_c_lunbo l1"></div>
                                    <div class="m_c_lunbo l2"></div>
                                    <div class="m_c_lunbo l3"></div>
                                    <div class="m_c_lunbo l4"></div>
                                    <div class="m_c_lunbo l5"></div>
                                    <div class="m_c_lunbo l6"></div>
                                </div>
                                <div class="mc1_tuijian">
                                    <div class="m_c_2_tit mc1_tit">
                                        文章推荐
                                        <ul>
                                            <li class="mc2t_an an1"></li>
                                            <li class="mc2t_an an2"></li>
                                            <li class="mc2t_an an3"></li>
                                            <li class="mc2t_an an4"></li>
                                            <li class="mc2t_an an5"></li>
                                        </ul>
                                    </div>
                                    <div class="mc1_con">
                                        <p class="mc1_sxq"></p>
                                        <div class="mc1_list">
                                            <p class="mc1_list_tit">Web前端入门</p>
                                            <p class="mcl_list_con">1994年可以看做前端历史的起点，这一年10月13日网景推出了第一版Navigator；这一年，Tim Berners-Lee创建了W3C；这一年，Tim的基友发布了CSS。还是这一年，为动态web网页设计的服务端脚本PHP以及笔者本人诞生。</p>
                                            <div class="mcl_list_info">
                                                <p>发布时间：2018-9-23 13：58</p>
                                                <p>分类：技术杂谈</p>
                                                <p>点赞：0</p>
                                                <p>评论：0</p>
                                                <p>访问：0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mc1_con">
                                        <p class="mc1_sxq"></p>
                                        <div class="mc1_list">
                                            <p class="mc1_list_tit">CSS3动画</p>
                                            <p class="mcl_list_con">HTML5和CSS3之所以强大，不仅因为现在大量的浏览器的支持，更是因为它们已经越来越能满足现代开发的需要。Flash在几年之后肯定会消亡，那么HTML5和CSS3将会替代Flash。今天我们要给大家分享8个最新的HTML5和纯CSS3动画及其源码。</p>
                                            <div class="mcl_list_info">
                                                <p>发布时间：2018-9-23 13：58</p>
                                                <p>分类：技术杂谈</p>
                                                <p>点赞：0</p>
                                                <p>评论：0</p>
                                                <p>访问：0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mc1_con">
                                        <p class="mc1_sxq"></p>
                                        <div class="mc1_list">
                                            <p class="mc1_list_tit">JavaScript入门</p>
                                            <p class="mcl_list_con">JavaScript一种直译式脚本语言，是一种动态类型、弱类型、基于原型的语言，内置支持类型。它的解释器被称为JavaScript引擎，为浏览器的一部分，广泛用于客户端的脚本语言，最早是在HTML（标准通用标记语言下的一个应用）网页上使用，用来给HTML网页增加动态功能。</p>
                                            <div class="mcl_list_info">
                                                <p>发布时间：2018-9-23 13：58</p>
                                                <p>分类：技术杂谈</p>
                                                <p>点赞：0</p>
                                                <p>评论：0</p>
                                                <p>访问：0</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m_c_list list2">
                                <div class="m_c_2_tit">
                                    这里有一些不成熟的小想法&nbsp;欢迎检验
                                    <ul>
                                        <li class="mc2t_an an1"></li>
                                        <li class="mc2t_an an2"></li>
                                        <li class="mc2t_an an3"></li>
                                        <li class="mc2t_an an4"></li>
                                        <li class="mc2t_an an5"></li>
                                    </ul>
                                </div>
                                <div class="m_c_2_max">
                                    <?php 
                                    $i = 0;
                                        while ($activerows = mysqli_fetch_array($activebool)){
                                    ?>
                                        <div class="m_c_2_lists">
                                            <a class="m_c_2_a" href="#mc2con" clId="<?php echo $activerows['id'];?>">
                                                <div class="mc2l_tit"><?php echo $activerows['title']; ?></div>
                                                <div class="mc2l_info">
                                                    <i class="sxq"></i>
                                                    <b><?php
                                                        $userId = $activerows['userId'];
                                                        $userbool = mysqli_query($link, $usersql);
                                                        while ($userrows = mysqli_fetch_array($userbool)) {
                                                            if ($userId === $userrows['id']) {
                                                                echo $userrows['nikename'];
                                                            }
                                                        }
                                                        ?></b>
                                                    <p>发布时间：<?php echo date('Y-m-d H:i', $activerows['time']); ?></p>
                                                    <p>分类：<?php
                                                        $classId = $activerows['classId'];
                                                        $activeclassbool = mysqli_query($link, $activeclasssql);
                                                        while ($activeclassrows = mysqli_fetch_array($activeclassbool, MYSQLI_ASSOC)) {
                                                            if ($classId === $activeclassrows['id']) {
                                                                echo $activeclassrows['activeClass'];
                                                            }
                                                        }
                                                        ?>
                                                    </p>
                                                    <p>点赞：<?php echo $activerows['praise']; ?></p>
                                                    <p>评论：<?php echo $activerows['comment']; ?></p>
                                                    <p>访问：<?php echo $activerows['visit']; ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="m_c_2_con" id="mc2con"></div>
                                <ul>
                                    <li class="mc2_an"></li>
                                    <li class="mc2_an"></li>
                                    <li class="mc2_an"></li>
                                    <li class="mc2_an"></li>
                                    <li class="mc2_an"></li>
                                </ul>
                            </div>
                            <div class="m_c_list list3">3</div>
                            <div class="m_c_list list4">4</div>
                            <div class="m_c_list list5">5</div>
                            <div class="m_c_list list6">6</div>
                            <div class="m_c_list list7">7</div>
                        </div>
                    </div>
                    <div class="m_c_right">
                        <div class="m_c_r_mine">
                            <p class="m_c_m_tit">博主寄语：</p>
                            <p class="m_c_m_con">
                                在不断奔跑的路上不要忘记偶尔停下来欣赏路边的风景。
                            </p>
                        </div>
                        <div class="m_c_r_class">
                            <p>课程推荐 Web前端</p>
                            <div class="m_c_r_lists">
                                <i id="m_c_l_1">1</i>
                                <ul>
                                    <li id="m_c_c_1">Web前端入门</li>
                                </ul>
                            </div>
                            <div class="m_c_r_lists">
                                <i id="m_c_l_2">2</i>
                                <ul>
                                    <li id="m_c_c_2">HTML标签</li>
                                </ul>
                            </div>
                            <div class="m_c_r_lists">
                                <i id="m_c_l_3">3</i>
                                <ul>
                                    <li id="m_c_c_3">CSS3动画</li>
                                </ul>
                            </div>
                            <div class="m_c_r_lists">
                                <i>4</i>
                                <ul>
                                    <li>HTML5新增标签</li>
                                </ul>
                            </div>
                            <div class="m_c_r_lists">
                                <i>5</i>
                                <ul>
                                    <li>JavaScript入门</li>
                                </ul>
                            </div>
                            <div class="m_c_r_lists">
                                <i>6</i>
                                <ul>
                                    <li>了解JQuery</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m_c_r_input">
                            <form>
                                <input type="text" placeholder="站内搜索" /><button>
                                    <img src="../img/sousuo.png" alt="">
                                </button>
                            </form>
                        </div>
                        <div class="m_c_r_2d">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>
                    SXQ 个人博客 & 版权归 SXQ 个人所有
                </p>
            </div>
        </div>
        <script src="../js/sxqBOKE.js" type="text/javascript"></script>
    </body>
</html>