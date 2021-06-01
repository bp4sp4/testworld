function copyToClipboard(val) {
    const t = document.createElement("textarea");
    document.body.appendChild(t);
    t.value = val;
    t.select();
    document.execCommand('copy');
    document.body.removeChild(t);
  }

  $('#copyUrl').click(function() {
    copyToClipboard('http://yunholand.com/TestWorld/index.php');
    alert('TEST WORLD URL을 복사하였습니다.');
  });