function check_input() {
  if (!document.member_form.pass.value) {
    alert("비밀번호를 입력하세요!");
    document.member_form.pass.focus();
    return;
  }

  if (!document.member_form.pass_confirm.value) {
    alert("비밀번호확인을 입력하세요!");
    document.member_form.pass_confirm.focus();
    return;
  }

  if (!document.member_form.name.value) {
    alert("이름을 입력하세요!");
    document.member_form.name.focus();
    return;
  }

  if (!document.member_form.email1.value) {
    alert("이메일 주소를 입력하세요!");
    document.member_form.email1.focus();
    return;
  }

  if (!document.member_form.email2.value) {
    alert("이메일 주소를 입력하세요!");
    document.member_form.email2.focus();
    return;
  }

  if (
    document.member_form.pass.value != document.member_form.pass_confirm.value
  ) {
    alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
    document.member_form.pass.focus();
    document.member_form.pass.select();
    return;
  }

  if (
    document.member_form.pass1.value.length < 8 ||
    document.member_form.pass1.value.length > 15
  ) {
    alert("비밀번호는 8~15자리입니다.");
  }
  document.member_form.submit();
}
