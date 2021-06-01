<?php
 include 'mysql.php';
// 네이버 로그인 접근토큰 요청 예제
 $client_id = "NLWJNKCwQHbapDmiuVEx";
 $redirectURI = urlencode("http://yunholand.com/TestWorld/callback.php");
 $state = "RAMDOM_STATE";
 $apiURL = "https://nid.naver.com/oauth2.0/authorize?response_type=code&client_id=".$client_id."&redirect_uri=".$redirectURI."&state=".$state;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <script defer src="./js/jquery-3.2.1.min.js"></script>
  <script defer src="./js/clickPopup.js"></script>
  <script defer src="./js/infiniteScroll.js"></script>
  <script defer src="./js/copyUrl.js"></script>
  <script defer src="./js/shareFacebook.js"></script>
  <script defer src="./js/shareKakao.js"></script>
  <script src="./js/kakao_min.js"></script>
  <title>TestWorld</title>
</head>
<body>
  <div class="container">
    <header class="in_header">
      <nav>
        <ul class="in_nav">
          <li>
            <button onclick="openPopup('contentPopup')">Content</button>
          </li>
          <li class="share_list">
            <button><img src="./image/icon/공유.svg" alt="공유 아이콘"></button>
            <ul class="share_dropdown-items">
              <li>
                <button id="shareBtnKakao" onclick="shareKakao()">
                   <img src="./image/icon/카카오톡.svg" alt="">
                   <div class="share-item_title">KAKAO</div>
                </button>
              </li>
              <li>
                <button id="shareBtnFacebook" onclick="shareFacebook()">
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
    <section>
      <div class="wrap">
        <!-- Content Popup -->
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
        <!-- Section area -->
        <div class="logo">
          <img src="./image/icon/Logo_L.png" alt="로고 이미지 L">
        </div>
        <div class="loginBtn">
          <button onclick="openPopup('myModal');" href="#">Login</button>
        </div>
        <!-- Login Popup -->
        <div id="myModal" class="modal" >
          <div class="modal-content">
            <div class="modal-head">
              <div class="login-modal__logo_S">
                <img src="./image/icon/Logo_S.png" alt="로고 이미지 small">
              </div>
              <span class="close" onclick="closePopup();">&times;</span>
            </div>
            <div class="loginForm">
              <div class="login__sns">
            
                <button class="loginBtn__kakao" onclick="kakaoLogin();">
                <!--<img src="https://www.gb.go.kr/Main/Images/ko/member/certi_kakao_login.png" style="height: 50px; width: auto;"/>-->
                카카오 로그인
                </button>
                  <script type='text/javascript'>
                  window.Kakao.init('db469b9aebb971e5be59c94ec5e33108'); 
                  function kakaoLogin() {
                    window.Kakao.Auth.login({
                      scope: 'account_email, gender, age_range',
                      success: function(authObj) {
                        console.log(authObj);
                        window.Kakao.API.request({
                          url:'/v2/user/me',
                          success: res => {
                            const kakao_account = res.kakao_account;
                            console.log(kakao_account);
                          }
                        });
                      }
                    });
                  }
                  
                  </script>
                  <form>
                  <form method ="post" action="callback.php">
                   <a class="loginBtn__naver" href="<?php echo $apiURL ?>">
                   <!--<img height="65" src="http://static.nid.naver.com/oauth/small_g_in.PNG"/>-->
                   네이버 로그인
                   </a>
                   </form>
                  </div>
              <div class="login__non">
              <form method ="post" action="content.php">
                  <div class="gender_radio">
                    <label for="men">
                      <input type="radio" name="gender" id="men" value="male">남
                    </label>
                    <label for="woman">
                      <input type="radio" name="gender" id="woman" value="female">여
                    </label>
                  </div>
                  <select name="ageGroup" id="ageGroup">
                    <option>연령대</option>
                    <option value="10s">10대</option>
                    <option value="20s">20대</option>
                    <option value="30s">30대</option>
                    <option value="40s">40대</option>
                    <option value="50s">50대</option>
                  </select>
                  <button class="loginBtn__non" >비회원 로그인</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>