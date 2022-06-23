<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Make Business Simple(中文）</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<?php
include_once "nav_mandarin.inc";
?>

<!--form-->
<section class="container mt-5">
    <br>
    <br>
    <br>
    <div class="row mb-2">
        <div class="col-lg-12"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">
                澳洲个人商业号码（ABN）
            </h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h4>按提示开始申请:</h4>
            <p><span class="badge badge-secondary">1</span> 预计需要7分钟填写，请确保填写内容真实准确，我们会对每一个申请进行人工审查，如果有问题我们会给你发送邮件，
                请确保你及时查看邮件并回复。</p>
            <p><span class="badge badge-secondary">2</span> 你可以使用信用卡支付，PayPal，支付宝或者在淘宝进行支付（如果你选择淘宝需要拍下5份），另外确保你付款时备注你的名字和邮箱。</p>
            <p><span class="badge badge-secondary">3</span> 如果你提供的信息完整，我们会在一个工作日内帮你申请，如果申请通过了，我们并给你发送确认信。</p>
            <hr>
        </div>
    </div>

    <div class="col-lg-12 rounded bg-light">
        <br>
        <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-personal-information-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
        <h4>Personal Information</h4>
        <hr>
        <input id="wantABN" type="hidden" value="1">
        <form name="info" action="processInformation.php" method="post">
            <div class="row"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group"><label for="firstName">名:*</label><input type="text" id="firstName" name="firstName" aria-describedby="firstName_help" class="form-control" /></div>
                <div class="col-lg-4 col-md-6 form-group"><label for="middleName">中间名:</label><input type="text" id="middleName" name="middleName" aria-describedby="middleName_help" class="form-control" /></div>
                <div class="col-lg-4 col-md-6 form-group"><label for="lastName" class="required">姓: *</label><input type="text" id="lastName" name="lastName" required="required" aria-describedby="lastName_help" class="form-control" /></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group">
                    <div class="form-group"><label for="email_first" class="required">邮箱地址: *</label><input type="email" id="email_first" name="email_first" required="required" class="form-control" /></div>
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                    <div class="form-group"><label for="email_second" class="required">重复邮箱地址: *</label><input type="email" id="email_second" name="email_second" required="required" class="form-control" /></div>
                </div>
            </div>
            <br>
            <div class="callout callout-default">
                <h4>如果你找不到你的TFN?</h4>
                <p> Look at your income tax notice of assessment.可以看你的缴税单</p>
                <p> 可以看你雇主给的payment summary或者养老金statement</p>
                <p> 如果你有My Gov账号也可以连接ATO税务局服务查看</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group"><label for="abn">如果你之前有过ABN，你可以写在这</label><input type="text" id="abn" name="abn" aria-describedby="abn_help" class="form-control" /></div>
                <div class="col-lg-6 col-md-6 form-group"><label for="tfn">如果你有TFN，强烈建议写在这</label><input type="text" id="tfn" name="tfn" aria-describedby="tfn_help" class="form-control" /></div>
            </div>
            <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-TFN-information-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group"><label for="phoneNo" class="required">手机号: *</label>
                    <input type="text" id="phoneNo" name="phoneNo" required="required" placeholder="0412345678" aria-describedby="phoneNo_help" class="form-control" />
                    <small id="phoneNo_help" class="form-text text-muted">手机号码不要有空格或者横线.</small>
                </div>
                <br>
                <div class="col-lg-6 col-md-6 form-group">
                    <label class="required">生日: *</label>
                    <div class="form-row">
                        <div class="col-4">
                            <select id="_birthday_day" name="birthday_day" required="required" class="form-control">
                                <div class="dropdown-menu">
                                    <option value="" class="dropdown-item">日</option><option value="1" class="dropdown-item">01</option>
                                    <option value="2" class="dropdown-item">02</option><option value="3" class="dropdown-item">03</option>
                                    <option value="4" class="dropdown-item">04</option><option value="5" class="dropdown-item">05</option>
                                    <option value="6" class="dropdown-item">06</option><option value="7" class="dropdown-item">07</option>
                                    <option value="8" class="dropdown-item">08</option><option value="9" class="dropdown-item">09</option>
                                    <option value="10" class="dropdown-item">10</option><option value="11" class="dropdown-item">11</option>
                                    <option value="12" class="dropdown-item">12</option><option value="13" selected="selected" class="dropdown-item">13</option>
                                    <option value="14" class="dropdown-item">14</option><option value="15" class="dropdown-item">15</option>
                                    <option value="16" class="dropdown-item">16</option><option value="17" class="dropdown-item">17</option>
                                    <option value="18" class="dropdown-item">18</option><option value="19" class="dropdown-item">19</option>
                                    <option value="20" class="dropdown-item">20</option><option value="21" class="dropdown-item">21</option>
                                    <option value="22" class="dropdown-item">22</option><option value="23" class="dropdown-item">23</option>
                                    <option value="24" class="dropdown-item">24</option><option value="25" class="dropdown-item">25</option>
                                    <option value="26" class="dropdown-item">26</option><option value="27" class="dropdown-item">27</option>
                                    <option value="28" class="dropdown-item">28</option><option value="29" class="dropdown-item">29</option>
                                    <option value="30" class="dropdown-item">30</option><option value="31" class="dropdown-item">31</option>
                                </div>
                            </select>
                        </div>
                        <div class="col-4">
                            <select id="_birthday_month" name="birthday_month" required="required" class="form-control">
                                <div class="dropdown-menu">
                                    <option value="" class="dropdown-item">月</option><option value="1" class="dropdown-item">一月</option>
                                    <option value="2" class="dropdown-item">二月</option><option value="3" class="dropdown-item">三月</option>
                                    <option value="4" class="dropdown-item">四月</option><option value="5" class="dropdown-item">五月</option>
                                    <option value="6" selected="selected" class="dropdown-item">六月</option>
                                    <option value="7" class="dropdown-item">七月</option><option value="8" class="dropdown-item">八月</option>
                                    <option value="9" class="dropdown-item">九月</option><option value="10" class="dropdown-item">十月</option>
                                    <option value="11" class="dropdown-item">十一月</option><option value="12" class="dropdown-item">十二月</option>
                                </div>
                            </select>
                        </div>
                        <div class="col-4">
                            <select id="_birthday_year" name="birthday_year" required="required" class="form-control">
                                <div class="dropdown-menu">
                                    <option class="drop-down" value="" selected="selected">年</option><option class="drop-down" value="2008">2008</option><option class="drop-down" value="2007">2007</option><option class="drop-down" value="2006">2006</option>
                                    <option class="drop-down" value="2005">2005</option><option class="drop-down" value="2004">2004</option><option class="drop-down" value="2003">2003</option><option class="drop-down" value="2002">2002</option><option class="drop-down" value="2001">2001</option>
                                    <option class="drop-down" value="2000">2000</option><option class="drop-down" value="1999">1999</option><option class="drop-down" value="1998">1998</option><option class="drop-down" value="1997">1997</option><option class="drop-down" value="1996">1996</option>
                                    <option class="drop-down" value="1995" selected="selected">1995</option><option class="drop-down" value="1994">1994</option><option class="drop-down" value="1993">1993</option><option class="drop-down" value="1992">1992</option><option class="drop-down" value="1991">1991</option>
                                    <option class="drop-down" value="1990">1990</option><option class="drop-down" value="1989">1989</option><option class="drop-down" value="1988">1988</option><option class="drop-down" value="1987">1987</option><option class="drop-down" value="1986">1986</option>
                                    <option class="drop-down" value="1985">1985</option><option class="drop-down" value="1984">1984</option><option class="drop-down" value="1983">1983</option><option class="drop-down" value="1982">1982</option><option class="drop-down" value="1981">1981</option>
                                    <option class="drop-down" value="1980">1980</option><option class="drop-down" value="1979">1979</option><option class="drop-down" value="1978">1978</option><option class="drop-down" value="1977">1977</option><option class="drop-down" value="1976">1976</option>
                                    <option class="drop-down" value="1975">1975</option><option class="drop-down" value="1974">1974</option><option class="drop-down" value="1973">1973</option><option class="drop-down" value="1972">1972</option><option class="drop-down" value="1971">1971</option>
                                    <option class="drop-down" value="1970">1970</option><option class="drop-down" value="1969">1969</option><option class="drop-down" value="1968">1968</option><option class="drop-down" value="1967">1967</option><option class="drop-down" value="1966">1966</option>
                                    <option class="drop-down" value="1965">1965</option><option class="drop-down" value="1964">1964</option><option class="drop-down" value="1963">1963</option><option class="drop-down" value="1962">1962</option><option class="drop-down" value="1961">1961</option>
                                    <option class="drop-down" value="1960">1960</option><option class="drop-down" value="1959">1959</option><option class="drop-down" value="1958">1958</option><option class="drop-down" value="1957">1957</option><option class="drop-down" value="1956">1956</option>
                                    <option class="drop-down" value="1955">1955</option><option class="drop-down" value="1954">1954</option><option class="drop-down" value="1953">1953</option><option class="drop-down" value="1952">1952</option><option class="drop-down" value="1951">1951</option>
                                    <option class="drop-down" value="1950">1950</option><option class="drop-down" value="1949">1949</option><option class="drop-down" value="1948">1948</option><option class="drop-down" value="1947">1947</option><option class="drop-down" value="1946">1946</option>
                                    <option class="drop-down" value="1945">1945</option><option class="drop-down" value="1944">1944</option><option class="drop-down" value="1943">1943</option><option class="drop-down" value="1942">1942</option><option class="drop-down" value="1941">1941</option>
                                    <option class="drop-down" value="1940">1940</option><option class="drop-down" value="1939">1939</option><option class="drop-down" value="1938">1938</option><option class="drop-down" value="1937">1937</option><option class="drop-down" value="1936">1936</option>
                                    <option class="drop-down" value="1935">1935</option><option class="drop-down" value="1934">1934</option><option class="drop-down" value="1933">1933</option><option class="drop-down" value="1932">1932</option><option class="drop-down" value="1931">1931</option>
                                    <option class="drop-down" value="1930">1930</option><option class="drop-down" value="1929">1929</option><option class="drop-down" value="1928">1928</option><option class="drop-down" value="1927">1927</option><option class="drop-down" value="1926">1926</option>
                                    <option class="drop-down" value="1925">1925</option><option class="drop-down" value="1924">1924</option><option class="drop-down" value="1923">1923</option><option class="drop-down" value="1922">1922</option><option class="drop-down" value="1921">1921</option>
                                    <option class="drop-down" value="1920">1920</option><option class="drop-down" value="1919">1919</option><option class="drop-down" value="1918">1918</option><option class="drop-down" value="1917">1917</option><option class="drop-down" value="1916">1916</option>
                                    <option class="drop-down" value="1915">1915</option><option class="drop-down" value="1914">1914</option><option class="drop-down" value="1913">1913</option><option class="drop-down" value="1912">1912</option><option class="drop-down" value="1911">1911</option>
                                    <option class="drop-down" value="1910">1910</option><option class="drop-down" value="1909">1909</option><option class="drop-down" value="1908">1908</option>
                                </div>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group"><label for="person_address" class="required">家庭住址: *</label><input type="text" id="person_address" name="person_address" required="required" aria-describedby="address_help" class="form-control" /></div>
                <div class="col-lg-6 col-md-6 form-group">
                    <label class="required" for="person_state">州: *</label>
                    <select id="person_state" name="person_state" required="required" class="form-control">
                        <div class="dropdown-menu">
                            <option value="" selected="selected" class="dropdown-item">选个州</option><option value="Australian Capital Territory" class="dropdown-item">首都领地</option>
                            <option value="New South Wales" class="dropdown-item">新南威尔士</option><option value="Northern Territory" class="dropdown-item">北领地</option><option value="Queensland" class="dropdown-item">昆士兰</option>
                            <option value="South Australia" class="dropdown-item">南澳</option><option value="Tasmania" class="dropdown-item">塔斯马尼亚</option><option value="Victoria" class="dropdown-item">维多利亚</option>
                            <option value="Western Australia" class="dropdown-item">西澳</option>
                        </div>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group"><label for="person_city" class="required">城市: *</label><input type="text" id="person_city" name="person_city" required="required" class="form-control" /></div>
                <div class="col-lg-6 col-md-6 form-group"><label for="person_zip" class="required">邮编: *</label><input type="text" id="person_zip" name="person_zip" required="required" class="form-control" /></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group">
                    <label class="required">从哪天起你需要使用个人ABN: *</label>
                    <div class="form-row">
                        <div class="col-4">
                            <select id="_startAt_day" name="startAt_day" required="required" class="form-control">
                                <div class="dropdown-menu">
                                    <option value="" class="dropdown-item">Day</option><option value="1" class="dropdown-item">01</option>
                                    <option value="2" class="dropdown-item">02</option><option value="3" class="dropdown-item">03</option>
                                    <option value="4" class="dropdown-item">04</option><option value="5" class="dropdown-item">05</option>
                                    <option value="6" class="dropdown-item">06</option><option value="7" class="dropdown-item">07</option>
                                    <option value="8" class="dropdown-item">08</option><option value="9" class="dropdown-item">09</option>
                                    <option value="10" class="dropdown-item">10</option><option value="11" class="dropdown-item">11</option>
                                    <option value="12" class="dropdown-item">12</option><option value="13" selected="selected" class="dropdown-item">13</option>
                                    <option value="14" class="dropdown-item">14</option><option value="15" class="dropdown-item">15</option>
                                    <option value="16" class="dropdown-item">16</option><option value="17" class="dropdown-item">17</option>
                                    <option value="18" class="dropdown-item">18</option><option value="19" class="dropdown-item">19</option>
                                    <option value="20" class="dropdown-item">20</option><option value="21" class="dropdown-item">21</option>
                                    <option value="22" class="dropdown-item">22</option><option value="23" class="dropdown-item">23</option>
                                    <option value="24" class="dropdown-item">24</option><option value="25" class="dropdown-item">25</option>
                                    <option value="26" class="dropdown-item">26</option><option value="27" class="dropdown-item">27</option>
                                    <option value="28" class="dropdown-item">28</option><option value="29" class="dropdown-item">29</option>
                                    <option value="30" class="dropdown-item">30</option><option value="31" class="dropdown-item">31</option>
                                </div>
                            </select>
                        </div>
                        <div class="col-4">
                            <select id="_startAt_month" name="startAt_month" required="required" class="form-control">
                                <div class="dropdown-menu">
                                    <option value="" class="dropdown-item">月</option><option value="1" class="dropdown-item">一月</option>
                                    <option value="2" class="dropdown-item">二月</option><option value="3" class="dropdown-item">三月</option>
                                    <option value="4" class="dropdown-item">四月</option><option value="5" class="dropdown-item">五月</option>
                                    <option value="6" selected="selected" class="dropdown-item">六月</option>
                                    <option value="7" class="dropdown-item">七月</option><option value="8" class="dropdown-item">八月</option>
                                    <option value="9" class="dropdown-item">九月</option><option value="10" class="dropdown-item">十月</option>
                                    <option value="11" class="dropdown-item">十一月</option><option value="12" class="dropdown-item">十二月</option>
                                </div>
                            </select>

                        </div>
                        <div class="col-4">
                            <select id="_startAt_year" name="startAt_year" required="required" class="form-control">
                                <div class="dropdown-menu">
                                    <option value=""  class="dropdown-item">年</option>
                                    <option value="2022" selected="selected"  class="dropdown-item">2022</option>
                                    <option value="2021"  class="dropdown-item">2021</option>
                                </div>
                            </select>
                        </div>
                    </div>
                    <small id="_startAt_help" class="form-text text-muted">你可以按今天的时间往回六个月</small>
                </div>
            </div>
    </div>
    <div class="col-lg-12 rounded bg-light">
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12 form-group">
                <label for="activity">商业活动内容 (例如 driver, cleaner, beauty, plumber, ...): *</label>
                <div class="input-group mb-3">
                    <input type="text" id="activity" name="activity" autocomplete="nope" class="form-control" />
                    <div class="input-group-append">
                        <input type="hidden" value="/ajax/business-activity" id="activity_url">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 form-group"><label class="" for="soleTrader">你为什么申请个人ABN？ *</label><select id="soleTrader" name="soleTrader" class="form-control"><option value="">Select an option</option><option value="1">New Business in Australia</option><option value="2">Investment Purposes</option><option value="3">Purchased Existing Business</option><option value="4">Contractor/Sub-contractor</option><option value="5">To receive payment for services</option></select></div>
        </div>
        <div class="row">
            <fieldset class="col-lg-12 col-md-12 firstTimeField form-group"><legend class="col-form-label required">你是第一次在澳洲做生意吗 *</legend><div id="firstTime"><div class="form-check"> <input type="radio" id="firstTime_1" name="firstTime" required="required" class="form-check-input" value="1" />
                        <label class="form-check-label required" for="firstTime_1">Yes</label></div><div class="form-check"> <input type="radio" id="firstTime_2" name="firstTime" required="required" class="form-check-input" value="2" />
                        <label class="form-check-label required" for="firstTime_2">No</label></div></div></fieldset>
        </div>
    </div>
    <br>
    <br>
    <!--    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-business-details-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <div class="col-lg-12 rounded bg-light">
        <h4>个人生意细节</h4>
        <hr>
        <div class="row">
            <fieldset class="col-lg-12 col-md-12 field">
                <legend class="applyTitle required">你是否将使用商业名？ *</legend>
                <input type="radio" id="needBusinessName_1" name="needBusinessName" required="required" class="form-check-input" value="Yes" />
                <label class="form-check-label required" for="needBusinessName_1">是</label>
                <br>
                <input type="radio" id="needBusinessName_2" name="needBusinessName" required="required" class="form-check-input" value="No" checked="checked" />
                <label class="form-check-label required" for="needBusinessName_2">否</label>
            </fieldset>
        </div>
        <br>
        <div class="name_information">
            <div class="row">
                <fieldset class="col-lg-12 col-md-12 field">
                    <legend class="applyTitle col-form-label required">你要注册多长时间的商业名？ *</legend>
                    <div id="period">
                        <input type="radio" id="period_1" name="period" required="required" class="form-check-input" value="Business Name 1 year (+$89)" />
                        <label class="form-check-label" for="period_1">1年 (+$89)</label>
                        <br>
                        <input type="radio" id="period_2" name="period" required="required" class="form-check-input" value="Business Name 3 years (+$169)" />
                        <label class="form-check-label" for="period_2">3年 (+$169)</label>
                    </div>
                </fieldset>
            </div>
            <br>
            <div class="row">
                <fieldset class="col-lg-12 col-md-12 form-group">
                    <legend class="col-form-label required field">请选择你的选项: *</legend>
                    <div id="type">
                        <input type="radio" id="type_1" name="type" required="required" class="form-check-input" value="Register a NEW Business Name" />
                        <label class="form-check-label required" for="type_1">注册一个新的商业名</label>
                        <br>
                        <input type="radio" id="type_2" name="type" required="required" class="form-check-input" value="Renew my Business Name" />
                        <label class="form-check-label required" for="type_2">延长现有的商业名</label>
                    </div>
                </fieldset>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 form-group">
                    <label for="businessName">你要使用什么商业名？ *</label>
                    <div class="input-group mb-3">
                        <input type="text" id="businessName" name="businessName" autocomplete="nope" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 form-group"><label class="required" for="birthLocation">出生国家: *</label>
                    <select id="birthLocation" name="birthLocation" required="required" class="form-control">
                        <div class="dropdown-menu">
                            <option value="" selected="selected">请选择你的出生国或地区</option><option class="dropdown-item value="46">China</option><option class="dropdown-item value="14">Australia</option><option class="dropdown-item value="217">China Taiwan</option><option class="dropdown-item value="1">Afghanistan</option><option class="dropdown-item value="2">Aland Islands</option><option class="dropdown-item value="3">Albania</option><option class="dropdown-item value="4">Algeria</option>
                            <option class="dropdown-item value="5">American Samoa</option><option class="dropdown-item value="6">Andorra</option><option class="dropdown-item value="7">Angola</option><option class="dropdown-item value="8">Anguilla</option><option class="dropdown-item value="9">Antarctica</option><option class="dropdown-item value="10">Antigua and Barbuda</option>
                            <option class="dropdown-item value="11">Argentina</option><option class="dropdown-item value="12">Armenia</option><option class="dropdown-item value="13">Aruba</option><option class="dropdown-item value="15">Austria</option><option class="dropdown-item value="16">Azerbaijan</option>
                            <option class="dropdown-item value="17">Bahamas</option><option class="dropdown-item value="18">Bahrain</option><option class="dropdown-item value="19">Bangladesh</option><option class="dropdown-item value="20">Barbados</option><option class="dropdown-item value="21">Belarus</option><option class="dropdown-item value="22">Belgium</option>
                            <option class="dropdown-item value="23">Belize</option><option class="dropdown-item value="24">Benin</option><option class="dropdown-item value="25">Bermuda</option><option class="dropdown-item value="26">Bhutan</option><option class="dropdown-item value="27">Bolivia</option><option class="dropdown-item value="28">Bonaire, Sint Eustatius and Saba</option>
                            <option class="dropdown-item value="29">Bosnia and Herzegovina</option><option class="dropdown-item value="30">Botswana</option><option class="dropdown-item value="31">Bouvet Island</option><option class="dropdown-item value="32">Brazil</option><option class="dropdown-item value="33">British Indian Ocean Territory</option>
                            <option class="dropdown-item value="34">Brunei Darussalam</option><option class="dropdown-item value="35">Bulgaria</option><option class="dropdown-item value="36">Burkina Faso</option><option class="dropdown-item value="37">Burundi</option><option class="dropdown-item value="38">Cape Verde</option><option class="dropdown-item value="39">Cambodia</option>
                            <option class="dropdown-item value="40">Cameroon</option><option class="dropdown-item value="41">Canada</option><option class="dropdown-item value="42">Cayman Islands</option><option class="dropdown-item value="43">Central African Republic</option><option class="dropdown-item value="44">Chad</option><option class="dropdown-item value="45">Chile</option>
                            <option class="dropdown-item value="47">Christmas Island</option><option class="dropdown-item value="48">Cocos (Keeling) Islands</option><option class="dropdown-item value="49">Colombia</option><option class="dropdown-item value="50">Comoros</option>
                            <option class="dropdown-item value="51">Congo, The Democratic Republic of the</option><option class="dropdown-item value="52">Congo</option><option class="dropdown-item value="53">Cook Islands</option><option class="dropdown-item value="54">Costa Rica</option><option class="dropdown-item value="55">Cote D&#039;Ivoire</option>
                            <option class="dropdown-item value="56">Croatia</option><option class="dropdown-item value="57">Cuba</option><option class="dropdown-item value="58">Curacao</option><option class="dropdown-item value="59">Cyprus</option><option class="dropdown-item value="60">Czech Republic</option><option class="dropdown-item value="61">Denmark</option>
                            <option class="dropdown-item value="62">Djibouti</option><option class="dropdown-item value="63">Dominica</option><option class="dropdown-item value="64">Dominican Republic</option><option class="dropdown-item value="65">Ecuador</option><option class="dropdown-item value="66">Egypt</option><option class="dropdown-item value="67">El Salvador</option>
                            <option class="dropdown-item value="68">Equatorial Guinea</option><option class="dropdown-item value="69">Eritrea</option><option class="dropdown-item value="70">Estonia</option><option class="dropdown-item value="71">Ethiopia</option><option class="dropdown-item value="72">Falkland Islands (Malvinas)</option>
                            <option class="dropdown-item value="73">Faroe Islands</option><option class="dropdown-item value="74">Fiji</option><option class="dropdown-item value="75">Finland</option><option class="dropdown-item value="76">France</option><option class="dropdown-item value="77">French Guiana</option><option class="dropdown-item value="78">French Polynesia</option>
                            <option class="dropdown-item value="79">French Southern Territories</option><option class="dropdown-item value="80">Gabon</option><option class="dropdown-item value="81">Gambia</option><option class="dropdown-item value="82">Georgia</option><option class="dropdown-item value="83">Germany</option><option class="dropdown-item value="84">Ghana</option>
                            <option class="dropdown-item value="85">Gibraltar</option><option class="dropdown-item value="86">Greece</option><option class="dropdown-item value="87">Greenland</option><option class="dropdown-item value="88">Grenada</option><option class="dropdown-item value="89">Guadeloupe</option><option class="dropdown-item value="90">Guam</option>
                            <option class="dropdown-item value="91">Guatemala</option><option class="dropdown-item value="92">Guernsey</option><option class="dropdown-item value="93">Guinea</option><option class="dropdown-item value="94">Guinea-Bissau</option><option class="dropdown-item value="95">Guyana</option><option class="dropdown-item value="96">Haiti</option>
                            <option class="dropdown-item value="97">Heard Island and McDonald Islands</option><option class="dropdown-item value="98">Holy See (Vatican City State)</option><option class="dropdown-item value="99">Honduras</option><option class="dropdown-item value="100">Hong Kong</option><option class="dropdown-item value="101">Hungary</option>
                            <option class="dropdown-item value="102">Iceland</option><option class="dropdown-item value="103">India</option><option class="dropdown-item value="104">Indonesia</option><option class="dropdown-item value="105">Iran, Islamic Republic of</option><option class="dropdown-item value="106">Iraq</option><option class="dropdown-item value="107">Ireland</option>
                            <option class="dropdown-item value="108">Isle of Man</option><option class="dropdown-item value="109">Israel</option><option class="dropdown-item value="110">Italy</option><option class="dropdown-item value="111">Jamaica</option><option class="dropdown-item value="112">Japan</option><option class="dropdown-item value="113">Jersey</option>
                            <option class="dropdown-item value="114">Jordan</option><option class="dropdown-item value="115">Kazakhstan</option><option class="dropdown-item value="116">Kenya</option><option class="dropdown-item value="117">Kiribati</option><option class="dropdown-item value="118">Korea, Democratic People&#039;s Republic of</option>
                            <option class="dropdown-item value="119">Korea, Republic of</option><option class="dropdown-item value="120">Kuwait</option><option class="dropdown-item value="121">Kyrgyzstan</option><option class="dropdown-item value="122">Lao People&#039;s Democratic Republic</option><option class="dropdown-item value="123">Latvia</option>
                            <option class="dropdown-item value="124">Lebanon</option><option class="dropdown-item value="125">Lesotho</option><option class="dropdown-item value="126">Liberia</option><option class="dropdown-item value="127">Libya</option><option class="dropdown-item value="128">Liechtenstein</option><option class="dropdown-item value="129">Lithuania</option>
                            <option class="dropdown-item value="130">Luxembourg</option><option class="dropdown-item value="131">Macao</option><option class="dropdown-item value="132">Macedonia</option><option class="dropdown-item value="133">Madagascar</option><option class="dropdown-item value="134">Malawi</option><option class="dropdown-item value="135">Malaysia</option>
                            <option class="dropdown-item value="136">Maldives</option><option class="dropdown-item value="137">Mali</option><option class="dropdown-item value="138">Malta</option><option class="dropdown-item value="139">Marshall Islands</option><option class="dropdown-item value="140">Martinique</option><option class="dropdown-item value="141">Mauritania</option>
                            <option class="dropdown-item value="142">Mauritius</option><option class="dropdown-item value="143">Mayotte</option><option class="dropdown-item value="144">Mexico</option><option class="dropdown-item value="145">Micronesia</option><option class="dropdown-item value="146">Moldova, Republic of</option><option class="dropdown-item value="147">Monaco</option>
                            <option class="dropdown-item value="148">Mongolia</option><option class="dropdown-item value="149">Montenegro</option><option class="dropdown-item value="150">Montserrat</option><option class="dropdown-item value="151">Morocco</option><option class="dropdown-item value="152">Mozambique</option><option class="dropdown-item value="153">Myanmar</option>
                            <option class="dropdown-item value="154">Namibia</option><option class="dropdown-item value="155">Nauru</option><option class="dropdown-item value="156">Nepal</option><option class="dropdown-item value="157">Netherlands</option><option class="dropdown-item value="158">New Caledonia</option><option class="dropdown-item value="159">New Zealand</option>
                            <option class="dropdown-item value="160">Nicaragua</option><option class="dropdown-item value="161">Niger</option><option class="dropdown-item value="162">Nigeria</option><option class="dropdown-item value="163">Niue</option><option class="dropdown-item value="164">Norfolk Island</option><option class="dropdown-item value="165">Northern Mariana Islands</option>
                            <option class="dropdown-item value="166">Norway</option><option class="dropdown-item value="167">Oman</option><option class="dropdown-item value="168">Pakistan</option><option class="dropdown-item value="169">Palau</option><option class="dropdown-item value="170">Palestine, State of</option><option class="dropdown-item value="171">Panama</option>
                            <option class="dropdown-item value="172">Papua New Guinea</option><option class="dropdown-item value="173">Paraguay</option><option class="dropdown-item value="174">Peru</option><option class="dropdown-item value="175">Philippines</option><option class="dropdown-item value="176">Pitcairn</option><option class="dropdown-item value="177">Poland</option>
                            <option class="dropdown-item value="178">Portugal</option><option class="dropdown-item value="179">Puerto Rico</option><option class="dropdown-item value="180">Qatar</option><option class="dropdown-item value="181">Reunion</option><option class="dropdown-item value="182">Romania</option><option class="dropdown-item value="183">Russian Federation</option>
                            <option class="dropdown-item value="184">Rwanda</option><option class="dropdown-item value="185">Saint Barthelemy</option><option class="dropdown-item value="186">Saint Helena, Ascension and Tristan Da Cunha</option><option class="dropdown-item value="187">Saint Kitts and Nevis</option>
                            <option class="dropdown-item value="188">Saint Lucia</option><option class="dropdown-item value="189">Saint Martin (French Part)</option><option class="dropdown-item value="190">Saint Pierre and Miquelon</option><option class="dropdown-item value="191">Saint Vincent and the Grenadines</option>
                            <option class="dropdown-item value="192">Samoa</option><option class="dropdown-item value="193">San Marino</option><option class="dropdown-item value="194">Sao Tome and Principe</option><option class="dropdown-item value="195">Saudi Arabia</option><option class="dropdown-item value="196">Senegal</option><option class="dropdown-item value="197">Serbia</option>
                            <option class="dropdown-item value="198">Seychelles</option><option class="dropdown-item value="199">Sierra Leone</option><option class="dropdown-item value="200">Singapore</option><option class="dropdown-item value="201">Sint Maarten (Dutch Part)</option><option class="dropdown-item value="202">Slovakia</option>
                            <option class="dropdown-item value="203">Slovenia</option><option class="dropdown-item value="204">Solomon Islands</option><option class="dropdown-item value="205">Somalia</option><option class="dropdown-item value="206">South Africa</option><option class="dropdown-item value="207">South Georgia and the South Sandwich Islands</option>
                            <option class="dropdown-item value="208">Spain</option><option class="dropdown-item value="209">Sri Lanka</option><option class="dropdown-item value="210">Sudan</option><option class="dropdown-item value="211">Suriname</option><option class="dropdown-item value="212">Svalbard and Jan Mayen</option><option class="dropdown-item value="213">Swaziland</option>
                            <option class="dropdown-item value="214">Sweden</option><option class="dropdown-item value="215">Switzerland</option><option class="dropdown-item value="216">Syrian Arab Republic</option><option class="dropdown-item value="218">Tajikistan</option>
                            <option class="dropdown-item value="219">Tanzania, United Republic of</option><option class="dropdown-item value="220">Thailand</option><option class="dropdown-item value="221">Timor-Leste</option><option class="dropdown-item value="222">Togo</option><option class="dropdown-item value="223">Tokelau</option><option class="dropdown-item value="224">Tonga</option>
                            <option class="dropdown-item value="225">Trinidad and Tobago</option><option class="dropdown-item value="226">Tunisia</option><option class="dropdown-item value="227">Turkey</option><option class="dropdown-item value="228">Turkmenistan</option><option class="dropdown-item value="229">Turks and Caicos Islands</option>
                            <option class="dropdown-item value="230">Tuvalu</option><option class="dropdown-item value="231">Uganda</option><option class="dropdown-item value="232">Ukraine</option><option class="dropdown-item value="233">United Arab Emirates</option><option class="dropdown-item value="234">United Kingdom</option>
                            <option class="dropdown-item value="235">United States Minor Outlying Islands</option><option class="dropdown-item value="236">United States</option><option class="dropdown-item value="237">Uruguay</option><option class="dropdown-item value="238">Uzbekistan</option><option class="dropdown-item value="239">Vanuatu</option>
                            <option class="dropdown-item value="240">Venezuela, Bolivarian Republic</option><option class="dropdown-item value="241">Viet Nam</option><option class="dropdown-item value="242">Virgin Islands, British</option><option class="dropdown-item value="243">Virgin Islands, U.S.</option>
                            <option class="dropdown-item value="244">Wallis and Futuna</option><option class="dropdown-item value="245">Western Sahara</option><option class="dropdown-item value="246">Yemen</option><option class="dropdown-item value="247">Zambia</option><option class="dropdown-item value="248">Zimbabwe</option><option class="dropdown-item value="249">South Sudan</option>
                        </div>
                    </select>
                </div>
                <div class="col-lg-4 col-md-4 form-group"><label for="states">州/省: *</label><input type="text" id="states" name="states" class="form-control" /></div>
                <div class="col-lg-4 col-md-4 form-group"><label for="suburb">城市: *</label><input type="text" id="suburb" name="suburb" class="form-control" /></div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-goods-and-services-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <div class="col-lg-12 rounded bg-light">
        <br>
        <h4>商品和服务税细节 Goods and Services Tax (GST)</h4>
        <hr>
        <div class="callout callout-default">
            <h4>商品和服务税（GST）注册: Sole Traders,合伙制,公司和信托.</h4>
            <p> 澳洲法律规定商业或者个体户（sole trader)年营业额（总收入减去GST）大于AUD $75,000必须要在ATO注册GST。</p>
            <p> 如果你提供出租车或者豪华车载客服务（比如Uber, Didi, Ola或者Taxify)，且不论你是租车用自己的车从事，都需要申请GST。</p>
            <p> 如果你想为你的生意或者公司抵掉燃油消耗税，你也需要申请GST。</p>
            <p> 如果你选择注册，那么至少要保持登记状态12个月。</p>
        </div>
        <br>
        <br>
        <h4>注册GST</h4>
        <p><span class="badge badge-secondary">1</span> 选择“是”需要填写额外的信息完成GST注册，选择“否”如果你不需要GST。</p>
        <p><span class="badge badge-secondary">2</span> 你的申请会在48小时内完成注册，注册成功我们会给你指定邮箱发送确认信息。</p>
        <div class="row">
            <fieldset class="col-lg-12 col-md-12 form-group">
                <legend class="col-form-label required">你需要注册GST吗 * (+$89)</legend>
                <input type="radio" id="needGST_1" name="needGST" required="required" class="form-check-input" value="Yes" checked="checked" />
                <label class="form-check-label required" for="needGST_1">是</label></div><div class="form-check">
            <input type="radio" id="needGST_2" name="needGST" required="required" class="form-check-input" value="No" />
            <label class="form-check-label required" for="needGST_2">否</label>
            </fieldset>
        </div>
        <br>
        <div class="gst_information">
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group"><label class="" for="GST_annual">你预计每年营业额有多少 *</label>
                    <select id="GST_annual" name="GST_annual" class="form-control">
                        <div class="dropdown-menu">
                            <option value="">Select an option</option>
                            <option value="$0 to $74,999" class="dropdown-item">$0 - $74,999</option>
                            <option value="$75,000 to $149,999" class="dropdown-item">$75,000 - $149,999</option>
                            <option value="$150,000 to $1,999,999" class="dropdown-item">$150,000 - $1,999,999</option>
                            <option value="$2 million to $9,999,999" class="dropdown-item">$2百万 - $9,999,999</option>
                            <option value="$10 million to $19,999,999" class="dropdown-item">$1000万 - $19,999,999</option>
                            <option value="$20 million and over" class="dropdown-item">$2000万以上</option>
                        </div>
                    </select>
                </div>
            </div>
            <div class="row">
                <fieldset class="col-lg-6 col-md-6 form-group">
                    <legend class="col-form-label required">你多久报一次GST? *</legend>
                    <input type="radio" id="GST_companyLodge_1" name="GST_companyLodge" required="required" class="form-check-input" value="Monthly" />
                    <label class="form-check-label required" for="GST_companyLodge_1">每月</label>
                    <br>
                    <input type="radio" id="GST_companyLodge_2" name="GST_companyLodge" required="required" class="form-check-input" value="Quarterly" />
                    <label class="form-check-label required" for="GST_companyLodge_2">每季度（常见）</label>
                    <br>
                    <input type="radio" id="GST_companyLodge_3" name="GST_companyLodge" required="required" class="form-check-input" value="Annually" />
                    <label class="form-check-label required" for="GST_companyLodge_3">每年（只有年营业额小于AUD$75，000时）</label>
                </fieldset>
            </div>
            <br>
            <div class="row">
                <fieldset class="col-lg-6 col-md-6 form-group">
                    <legend class="col-form-label required">你要怎么计算GST？ *</legend>
                    <input type="radio" id="GST_cashBasis_1" name="GST_cashBasis" required="required" class="form-check-input" value="When I receive the cash" />
                    <label class="form-check-label required" for="GST_cashBasis_1">当收到付款时</label>
                    <br>
                    <input type="radio" id="GST_cashBasis_2" name="GST_cashBasis" required="required" class="form-check-input" value="When I issue the invoice" />
                    <label class="form-check-label required" for="GST_cashBasis_2">当发出发票时</label>
                </fieldset>
            </div>
            <br>
<!--            <div class="callout callout-default">-->
<!--                <p> GST is payable on income derived on a Cash basis, when income is received from the Customer.</p>-->
<!--                <p> GST may be claimed on expenses when physical payment is made to a GST registered supplier.</p>-->
<!--                <p> GST is payable on income derived on an Accruals basis, when an invoice is issued to the Customer-->
<!--                    (irrespective when a payment is made).</p>-->
<!--                <p> GST may be claimed on expenses incurred when the supplier presents you with a tax invoice.</p>-->
<!--            </div>-->
<!--            <br>-->
            <div class="row">
                <fieldset class="col-lg-6 col-md-6 form-group">
                    <legend class="col-form-label required">你是否进口商品和服务到澳洲？ *</legend>
                    <input type="radio" id="GST_import_1" name="GST_import" required="required" class="form-check-input" value="Yes" />
                    <label class="form-check-label required" for="GST_import_1">是</label>
                    <br>
                    <input type="radio" id="GST_import_2" name="GST_import" required="required" class="form-check-input" value="No" />
                    <label class="form-check-label required" for="GST_import_2">否</label>

                </fieldset>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group">
                    <label class="required">GST从哪一天开始？: *</label>
                    <div class="form-row">
                        <div class="col-4">
                            <select id="GST_startAt_day" name="GST_startAt_day" class="form-control">
                                <div class="dropdown-menu">
                                    <option value="" class="dropdown-item">Day</option><option value="1" class="dropdown-item">01</option>
                                    <option value="2" class="dropdown-item">02</option><option value="3" class="dropdown-item">03</option>
                                    <option value="4" class="dropdown-item">04</option><option value="5" class="dropdown-item">05</option>
                                    <option value="6" class="dropdown-item">06</option><option value="7" class="dropdown-item">07</option>
                                    <option value="8" class="dropdown-item">08</option><option value="9" class="dropdown-item">09</option>
                                    <option value="10" class="dropdown-item">10</option><option value="11" class="dropdown-item">11</option>
                                    <option value="12" class="dropdown-item">12</option><option value="13" selected="selected" class="dropdown-item">13</option>
                                    <option value="14" class="dropdown-item">14</option><option value="15" class="dropdown-item">15</option>
                                    <option value="16" class="dropdown-item">16</option><option value="17" class="dropdown-item">17</option>
                                    <option value="18" class="dropdown-item">18</option><option value="19" class="dropdown-item">19</option>
                                    <option value="20" class="dropdown-item">20</option><option value="21" class="dropdown-item">21</option>
                                    <option value="22" class="dropdown-item">22</option><option value="23" class="dropdown-item">23</option>
                                    <option value="24" class="dropdown-item">24</option><option value="25" class="dropdown-item">25</option>
                                    <option value="26" class="dropdown-item">26</option><option value="27" class="dropdown-item">27</option>
                                    <option value="28" class="dropdown-item">28</option><option value="29" class="dropdown-item">29</option>
                                    <option value="30" class="dropdown-item">30</option><option value="31" class="dropdown-item">31</option>
                                </div>
                            </select>
                        </div>
                        <div class="col-4">
                            <select id="GST_startAt_month" name="GST_startAt_month" class="form-control">
                                <div class="dropdown-menu">
                                    <option value="" class="dropdown-item">月</option><option value="1" class="dropdown-item">一月</option>
                                    <option value="2" class="dropdown-item">二月</option><option value="3" class="dropdown-item">三月</option>
                                    <option value="4" class="dropdown-item">四月</option><option value="5" class="dropdown-item">五月</option>
                                    <option value="6" selected="selected" class="dropdown-item">六月</option>
                                    <option value="7" class="dropdown-item">七月</option><option value="8" class="dropdown-item">八月</option>
                                    <option value="9" class="dropdown-item">九月</option><option value="10" class="dropdown-item">十月</option>
                                    <option value="11" class="dropdown-item">十一月</option><option value="12" class="dropdown-item">十二月</option>
                                </div>
                            </select>
                        </div>
                        <div class="col-4">
                            <select id="GST_startAt_year" name="GST_startAt_year" class="form-control">
                                <div class="dropdown-menu">
                                    <option value="" class="dropdown-item">年</option>
                                    <option value="2022" selected="selected" class="dropdown-item">2022</option>
                                    <option value="2021" class="dropdown-item">2021</option>
                                </div>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <fieldset class="col-lg-12 col-md-12 form-group">
            <legend class="col-form-label required">条款和条件 *</legend>
        </fieldset>
        <div class="col-lg-12 col-md-12 form-group"><div class="form-check"> <input type="checkbox" id="termsService" name="termsService" required="required" class="form-check-input" value="1" />
                <label class="form-check-label required" for="termsService">我已经仔细阅读了服务条款和条件， 我授权www.workabn.com.au作为我的代理申请个人商业号码及相关资质。 *</label></div></div>
        <div class="col-lg-12 col-md-12 form-group"><div class="form-check"> <input type="checkbox" id="infoProvided" name="infoProvided" required="required" class="form-check-input" value="1" />
                <label class="form-check-label required" for="infoProvided">我已经确认了我提供的信息真实而且有效。*</label></div></div>
    </div>
    <br>
    <button class="btn btn-success float-right btn-lg col-md-2" aria-label="Submit">&nbsp;&nbsp;&nbsp;&nbsp;提交&nbsp;&nbsp;&nbsp;&nbsp;</button>
    </form>
    <form action="payment_form.php"><button type="submit" class="btn btn-info">&nbsp付款&nbsp</button></form>
</section>

<?php
include_once "footer.inc";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
