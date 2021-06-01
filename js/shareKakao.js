function shareKakao() {
  Kakao.init('db469b9aebb971e5be59c94ec5e33108');
  Kakao.Link.createDefaultButton({
    container: '#shareBtnKakao',
    objectType: 'feed',
    content: {
      title: "TestWorld",
      description: "다양한 심리테스트 모음 사이트 TestWorld 입니다",
      imageUrl: "http://yunholand.com/TestWorld/index.php",
      link: {
         mobileWebUrl: "http://yunholand.com/TestWorld/index.php",
         webUrl: "http://yunholand.com/TestWorld/index.php"
      }
    }
  });
}

