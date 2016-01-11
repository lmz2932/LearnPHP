<?php
    header('content-type:text/html; charset=utf-8');
    $content = "旅行，从最初的向往、狂热，逐渐变为一种习惯，而每年两次的旅行早已经成为我生活的一部分。每一次旅行都遇到很多难忘的人和事，他们组成了我人生旅途中精彩的回忆。<br />
而这一次的美西之行，更是增加了许多从未有过的难忘经历：短短的十六天旅途却经历了春、夏、冬三季的变化；旧金山阿拉莫广场被警察开罚单；Gray Whale Cove State Beach前一分钟晴空万里，后一分钟大雾弥漫伸手不见五指；大苏尔看完日落，在漆黑的沿海盘山公路疾驰3个小时；上羚羊谷暴雨突袭临时封谷，浑身湿透的坐在敞篷观光车内接受暴风雨的洗礼；优胜美地国家公园暴风雪三条路临时封路，迎着大雪开了整整一天从东门绕到西门。<br />
十六天的旅途很顺利，既感受了久负盛名的景点，也发现了些虽然名气不大但却令人流连的美景。返回后便开始整理照片，现在终于着笔，愿通过这篇游记为自己留下点滴记忆，望通过个人感受为大家提供实际帮助。";
?>
<!doctype html>
<html>
    <head>
        <title>h5_3</title>
    </head>
    <body>
        <p>
            <?php
                echo $content;
            ?>
        </p>
        <form action="" method='post' name="test">
            <div>
                <label for="search">请请入要查询的内容：</label>
                <input name="search" type="text" size="30" />
            </div>
            <div>
                <input type="submit" value="查找" />
            </div>
        </form>
        <?php
            if (strlen(trim(@$_POST['search'])) > 0){
                $content = str_replace(trim(@$_POST['search']),
                            "<span style=\"color:red;text-weight:bold;\">" . trim(@$_POST['search']) . "</span>",
                            $content);
                echo $content;
                $_POST['search'] = '';
            }
        ?>
    </body>
</html>
