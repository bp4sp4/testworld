<?php
include 'mysql.php';
$gender = "";
if($_POST["gender"]=="male")
    $gender="남";
else if($_POST["gender"]=="female")
    $gender="여";
$age=$_POST["ageGroup"];

$sql = "INSERT INTO Non_mem (gender, age) VALUES('$gender','$age')";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/fullpage.css">
  <script defer type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
  <script defer type="text/javascript" src="./js/fullpage.js"></script>
  <script defer type="text/javascript" src="./js/option.js"></script>
  <script defer type="text/javascript" src="./js/clickPopup.js"></script>
  <script defer type="text/javascript" src="./js/rankTab.js"></script>
  <script defer type="text/javascript" src="./js/copyUrl.js"></script>
  <script defer src="./js/shareFacebook.js"></script>
  <script defer src="./js/shareKakao.js"></script>
  <title>TestWorld</title>
</head>
<body>
  <header class="con_header">
    <div class=""><img src="./image/icon/Logo_S.png" alt=""></div>
    <nav>
      <ul class="con_nav">
        <li>
          <button >Logout</button>
        </li>
        <li class="share_list">
          <button>
            <img src="./image/icon/공유.svg" alt="공유 아이콘">
          </button>
          <ul class="share_dropdown-items">
            <li>
            <button id="shareBtnKakao" onclick="shareKakao()">
                 <img src="./image/icon/카카오톡.svg" alt="">
                 <div class="share-item_title">KAKAO</div>
              </button>
            </li>
            <li>
              <button id="shareBtnFacebook" onclick="shareFacebok()">
                <img src="./image/icon/페이스북.svg" alt="">
                <div class="share-item_title">FACEBOOK</div>
              </button>
            </li>
            <li>
              <button id="copyUrl" onclick="copyToClipboard();">
                <img src="./image/icon/링크.svg" alt="">
                <div class="share-item_title">URL</div>
              </button>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <div id="contentPopup" class="modal">
    <div class="modal-content">
      <div class="modal-head">
        <div class="login-modal__logo_S">
          <img src="./image/icon/Logo_S.png" alt="로고 이미지 small">
        </div>
        <span class="close" onclick="closePopup();">&times;</span>
      </div>
      <div class="content_list_area">
        <ul id="contentLists">
          <li >
            <a href="#">
              <div class="content_item">
                <img src="./image/300x300.png" alt="썸네일이미지">
                <div class="content_item_desc">
                  <div class="content_item_desc_text">
                    <h4>재미로 보는 심리테스트 1</h4>
                    <p>
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="content_item">
                <img src="./image/300x300.png" alt="썸네일이미지">
                <div class="content_item_desc">
                  <div class="content_item_desc_text">
                    <h4>재미로 보는 심리테스트 2</h4>
                    <p>
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="content_item">
                <img src="./image/300x300.png" alt="썸네일이미지">
                <div class="content_item_desc">
                  <div class="content_item_desc_text">
                    <h4>재미로 보는 심리테스트 3</h4>
                    <p>
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="content_item">
                <img src="./image/300x300.png" alt="썸네일이미지">
                <div class="content_item_desc">
                  <div class="content_item_desc_text">
                    <h4>재미로 보는 심리테스트 4</h4>
                    <p>
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="content_item">
                <img src="./image/300x300.png" alt="썸네일이미지">
                <div class="content_item_desc">
                  <div class="content_item_desc_text">
                    <h4>재미로 보는 심리테스트 5</h4>
                    <p>
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                      간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="fullpage">
    <!-- rolling page 1 -->
    <section class="section">
      <div class="slide" >
        <div class="rollingPage_1">
          <div class="profile">
            <div class="people_img">
              <img src="./image/genderImage/M/20대_남자.svg" alt="20대 남자">
            </div>
            <div class="profile_info">
              <div class="info_gender">MAN</div>
              <div class="info_age">20<span>s</span></div>
            </div>
          </div>
          <div class="interest_content_box">
            <ul>
              <li>
                <a href="#">
                  <div class="interest_content">
                    <img src="./image/300x300.png" alt="썸네일이미지">
                    <div class="interest_content_desc">
                      <div class="interest_content_desc_text">
                        <h4>20대 심리테스트 1위</h4>
                        <p>
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                        </p>
                      </div>
                      <div class="interest_content_desc_func">
                        <button class="star"><img src="./image/icon/별_빈.svg" alt=""></button>
                        <div class="recommend_number">

                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="interest_content">
                    <img src="./image/300x300.png" alt="썸네일이미지">
                    <div class="interest_content_desc">
                      <div class="interest_content_desc_text">
                        <h4>20대 심리테스트 2위</h4>
                        <p>
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                        </p>
                      </div>
                      <div class="interest_content_desc_func">
                        <button class="star"><img src="./image/icon/별_빈.svg" alt=""></button>
                        <div class="recommend_number">

                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="interest_content">
                    <img src="./image/300x300.png" alt="썸네일이미지">
                    <div class="interest_content_desc">
                      <div class="interest_content_desc_text">
                        <h4>20대 심리테스트 3위</h4>
                        <p>
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                        </p>
                      </div>
                      <div class="interest_content_desc_func">
                        <button class="star"><img src="./image/icon/별_빈.svg" alt=""></button>
                        <div class="recommend_number">

                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="interest_content">
                    <img src="./image/300x300.png" alt="썸네일이미지">
                    <div class="interest_content_desc">
                      <div class="interest_content_desc_text">
                        <h4>20대 심리테스트 4위</h4>
                        <p>
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                          간단 설명입니다.간단 설명입니다.간단 설명입니다.간단 설명입니다.
                        </p>
                      </div>
                      <div class="interest_content_desc_func">
                        <button class="star"><img src="./image/icon/별_빈.svg" alt=""></button>
                        <div class="recommend_number">

                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
        <div class="slide" >
          <div class="ranking">
            <ul class="age_list">
              <li class="age">
                <button class="age_btn current" data-tab="age_10">10</button>
              </li>
            <li class="age">
              <button class="age_btn" data-tab="age_20">20</button>
            </li>
            <li class="age">
              <button class="age_btn" data-tab="age_30">30</button>
            </li>
            <li class="age">
              <button class="age_btn" data-tab="age_40">40</button>
            </li>
            <li class="age">
              <button class="age_btn" data-tab="age_50">50</button>
            </li>
          </ul>
          <div class="age_rank_wrap current" id="age_10">
            <h3 class="vh">10대 인기 순위</h3>
            <ol class="age_rank">
              <li class="rank-1">
                <div class="rank_number">1</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>10대 인기 콘텐츠 1위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-2">
                <div class="rank_number">2</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>10대 인기 콘텐츠 2위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-3">
                <div class="rank_number">3</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>10대 인기 콘텐츠 3위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
            </ol>
          </div>
          <div class="age_rank_wrap" id="age_20">
            <h3 class="vh">20대 인기 순위</h3>
            <ol class="age_rank">
              <li class="rank-1">
                <div class="rank_number">1</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>20대 인기 콘텐츠 1위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-2">
                <div class="rank_number">2</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>20대 인기 콘텐츠 2위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-3">
                <div class="rank_number">3</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>20대 인기 콘텐츠 3위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
            </ol>
          </div>
          <div class="age_rank_wrap" id="age_30">
            <h3 class="vh">30대 인기 순위</h3>
            <ol class="age_rank">
              <li class="rank-1">
                <div class="rank_number">1</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>30대 인기 콘텐츠 1위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-2">
                <div class="rank_number">2</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>30대 인기 콘텐츠 2위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-3">
                <div class="rank_number">3</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>30대 인기 콘텐츠 3위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
            </ol>
          </div>
          <div class="age_rank_wrap" id="age_40">
            <h3 class="vh">40대 인기 순위</h3>
            <ol class="age_rank">
              <li class="rank-1">
                <div class="rank_number">1</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>40대 인기 콘텐츠 1위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-2">
                <div class="rank_number">2</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>40대 인기 콘텐츠 2위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-3">
                <div class="rank_number">3</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>40대 인기 콘텐츠 3위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
            </ol>
          </div>
          <div class="age_rank_wrap" id="age_50">
            <h3 class="vh">50대 인기 순위</h3>
            <ol class="age_rank">
              <li class="rank-1">
                <div class="rank_number">1</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>50대 인기 콘텐츠 1위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-2">
                <div class="rank_number">2</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>50대 인기 콘텐츠 2위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
              <li class="rank-3">
                <div class="rank_number">3</div>
                <a class="rank_content" href="#">
                  <img src="./image/300x300.png" alt="">
                  <div class="rank_content_desc">
                    <h4>50대 인기 콘텐츠 3위</h4>
                    <p>
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                      간단 설명입니다.
                    </p>
                  </div>
                </a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- rolling page 2 -->
    <section class="section">
      <div class="fullpage-two_wrap">
        <div class="fullpage-two_contents">
          <div class="recommened_area">
            <ul class="recommened_list">
              <li>
                <a href="#">
                  <img src="./image/300x300.png" alt="콘텐츠 썸네일 이미지">
                  <h3>추천 콘텐츠 제목1</h3>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./image/300x300.png" alt="콘텐츠 썸네일 이미지">
                  <h3>추천 콘텐츠 제목2</h3>
                </a>
              </li>
            </ul>
          </div>
          <div class="content-list_area">
            <button class="more_button" onclick="openPopup('contentPopup')">
              <img src="image/icon/플러스.svg" alt="더보기 버튼 아이콘">
              <span class="vh">더보기 버튼</span>
            </button>
            <ul>
              <li><a href="#">심리테스트1</a></li>
              <li><a href="#">심리테스트2</a></li>
              <li><a href="#">심리테스트3</a></li>
              <li><a href="#">심리테스트4</a></li>
              <li><a href="#">심리테스트5</a></li>
            </ul>
          </div>
        </div>
        <footer>
          <div class="footer_text">
            Copyright JB & SH. All right reserved.
          </div>
        </footer>
      </div>
      
    </section>
    
  </div>
</body>
</html>