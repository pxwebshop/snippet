<?php
$pageid = "c-wp-recruitsearch";
$scss = "dev/scss/3_project/_c-wp-recruitsearch.scss";
$myPath = __FILE__;
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/wp/wp-load.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<div class="c-gl-box c-gl-box--wide" data-name="c-recruit-search">
    <form id="Filters">
        <table class="c-table1 filter">
            <tr>
                <th>検索条件指定</th>
                <th >
                <a href="" class="c-table1__btn" id="ResetPC"><span><img src="/assets/img/common/reload-white.svg" alt="" width="18" height="17"></span>条件リセット</a>
                </th>
            </tr>
            <tr>
                <td class="c-table1__first">
                    <span>
                        <img src="/assets/img/common/man_01-red.svg" alt="" width="22" height="22" class="pc-only">
                        <img src="/assets/img/common/man_01-red.svg" alt="" width="11" height="11" class="sp-only">
                    </span>
                    雇用形態</td>
                <td class="c-table1__last">
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value1">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>新卒</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value2">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>中途</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value3">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>アルバイト・パート</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="c-table1__first">
                    <span>
                        <img src="/assets/img/common/occupations-red.svg" alt="" width="23" height="21" class="pc-only">
                        <img src="/assets/img/common/occupations-red.svg" alt="" width="12" height="11" class="sp-only">
                    </span>職種</td>
                <td class="c-table1__last">
                    <div class="l-checkbox">
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value4">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>CM<span>（アルバイト）</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value5">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>CM2-CM3<span>（パート）</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value6">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>CMリーダー<span>（パート）</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value7">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>CM店長<span>（パート）</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value8">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>スタッフ</label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value9">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>主任</label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value10">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>店長<span>（マネージャー）</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value11">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>テリトリー<span>マネージャー</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value12">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>エリア<span>マネージャー</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value13">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>スペシャリスト</label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value14">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>シニア<span>スペシャリスト</span></label>
                        </div>
                        <div class="c-input">
                            <input type="checkbox" name="aaa8" value=".value15">
                            <img class="svg" src="/assets/img/common/check.svg">
                            <label>グループリード</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="c-table1__first">
                    <span>
                        <img src="/assets/img/common/calendar-red.svg" alt="" width="22" height="22" class="pc-only">
                        <img src="/assets/img/common/calendar-red.svg" alt="" width="11" height="11" class="sp-only">
                    </span>入社年</td>
                <td class="c-table1__last">
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value16">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>～2年目</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value17">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>2～5年目</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value18">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>5～8年目</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value19">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>8年以上</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="c-table1__first">
                    <span>
                        <img src="/assets/img/common/pin-red.svg" alt=""  width="19" height="22" class="pc-only">
                        <img src="/assets/img/common/pin-red.svg" alt=""  width="10" height="11" class="sp-only">
                    </span>勤務地</td>
                <td class="c-table1__last">
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value20">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>本社</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value21">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>北海道・東北</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value22">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>関東</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value23">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>中部</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value24">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>関西</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value25">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>中国</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value26">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>九州</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="c-table1__first">
                    <span>
                        <img src="/assets/img/common/gender-red.svg" alt="" width="19" height="22" class="pc-only">
                        <img src="/assets/img/common/gender-red.svg" alt="" width="10" height="11" class="sp-only">
                    </span>性別</td>
                <td class="c-table1__last">
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value27">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>男</label>
                    </div>
                    <div class="c-input">
                        <input type="checkbox" name="aaa8" value=".value28">
                        <img class="svg" src="/assets/img/common/check.svg">
                        <label>女</label>
                    </div>
                </td>
            </tr>
            <tr class="sp-only">
                <td><a href="" class="c-table1__btn" id="ResetSP">
                    <span>
                        <img src="/assets/img/common/reload-white.svg" alt="" width="18" height="17" class="pc-only">
                        <img src="/assets/img/common/reload-white.svg" alt="" width="13" height="12" class="sp-only">
                    </span>条件リセット</a></td>
            </tr>
        </table>
    </form>
    <div id="Container">
        <ul class="c-list2">
            <?php
				$args = array (
					'posts_per_page' => -1,
					'post_type' => 'people',
					'order' => 'ASC',
                );
                
				$the_query = new WP_Query( $args );
                if ($the_query-> have_posts() ) : while ($the_query -> have_posts() ) : $the_query->the_post(); 
                $field = get_field_object('c-employment');
                $employment = $field['value'];
                $field2 = get_field_object('c-jobtype');
                $jobtype = $field2['value'];
                $field3 = get_field_object('c-joiningyear');
                $joiningyear = $field3['value'];
                $field4 = get_field_object('c-service');
                $service = $field4['value'];
                $field5 = get_field_object('c-gender');
                $gender= $field5['value'];
            ?>
                        <li class="c-list2__card mix <?php echo $employment." ".$jobtype." ".$joiningyear." ".$service." ".$gender ?>">
                        <a href="" class="c-arrow">
                            <div class="c-list2__img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="c-list2__text">
                                <h3><?php the_title();?></h3>
                                <span><?php the_field('c-name'); ?></span>
                                <p><?php the_field('c-description'); ?></p>
                            </div>
                        </a>
                    </li>
			<?php endwhile; endif; ?>
        </ul>
    </div>
</div>
<script src="/assets/js/filter.min.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>