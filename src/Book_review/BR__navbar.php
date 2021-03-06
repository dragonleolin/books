<!-- 左邊aside選單欄位 -->

<aside class="d-flex aside_heigh">
    <div id="accordion">
        <div class="aside card">
            <button type="button" class="aside card-header btn btn-info" id="headingOne">
                <div class="aside_hover" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <img class="aside_logo" src="../../images/icon_VD_m.svg" alt="">
                    <span class="aside_text">廠商管理</span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </button>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>廠商總表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>廠商訂單總表</span>
                </button>
            </div>
        </div>
        <div class="aside card">
            <button type="button" class="aside card-header btn btn-info" id="headingTwo">
                <div class="aside_hover" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <img class="aside_logo" src="../../images/icon_VB_m.svg" alt="">
                    <span class="aside_text">廠商書籍管理</span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </button>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>廠商書籍總表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>新增廠商書籍</span>
                </button>
            </div>
        </div>

        <div class="aside card">
            <button type="button" class="aside card-header btn btn-info" id="headingThree">
                <div class="aside_hover" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <img class="aside_logo" src="../../images/icon_MR_m.svg" alt="">
                    <span class="aside_text">會員管理</span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </button>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>會員總表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>新增會員</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>會員訂單總表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>會員書評總表</span>
                </button>
            </div>
        </div>

        <div class="aside card">
            <button type="button" class="aside card-header btn btn-info" id="headingFour">
                <div class="aside_hover" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <img class="aside_logo" src="../../images/icon_MB_m.svg" alt="">
                    <span class="aside_text">會員書籍管理</span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </button>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>會員書籍總表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>新增會員書籍</span>
                </button>
            </div>
        </div>

        <div class="aside card">
            <button type="button" class="aside card-header btn btn-info" id="headingFive">
                <div class="aside_hover" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <img class="aside_logo" src="../../images/icon_BR_m.svg" alt="">
                    <span class="aside_text">書評人管理</span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </button>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <button type="button" class="btn btn-light sub_aside_text" onclick="location.href='BR_data_list.php'">
                    <i class="fas fa-caret-right"></i>
                    <span>書評人總表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text " onclick="location.href='BR_insert.php'">
                    <i class="fas fa-caret-right"></i>
                    <span>新增書評人</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text" onclick="location.href='BR_bookreview_list.php'">
                    <i class="fas fa-caret-right"></i>
                    <span>書評列表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>影片列表</span>
                </button>
            </div>
        </div>

        <div class="aside card">
            <button type="button" class="aside card-header btn btn-info" id="headingSix">
                <div class="aside_hover" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <img class="aside_logo" src="../../images/icon_AC_m.svg" alt="">
                    <span class="aside_text">實體活動管理</span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </button>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>品書官方活動總表</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>廠商主辦活動總表</span>
                </button>
            </div>
        </div>

        <div class="aside card">
            <button type="button" class="aside card-header btn btn-info" id="headingSeven">
                <div class="aside_hover" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <img class="aside_logo" src="../../images/icon_PP_m.svg" alt="">
                    <span class="aside_text">虛擬行銷管理</span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </button>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>P幣系統</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>折扣系統</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>檢舉系統</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>廣告系統</span>
                </button>
                <button type="button" class="btn btn-light sub_aside_text">
                    <i class="fas fa-caret-right"></i>
                    <span>紙娃娃系統</span>
                </button>
            </div>
        </div>
    </div>
</aside>