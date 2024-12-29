window.addEventListener("DOMContentLoaded", function () {
  [].forEach.call(document.querySelectorAll("#floatingTel"), function (e) {
    var a;
    function t(e) {
      e.keyCode && (a = e.keyCode);
      this.selectionStart < 3 && e.preventDefault();
      var t = "+7 (___) ___-__-__",
        i = 0,
        s = t.replace(/\D/g, ""),
        n = this.value.replace(/\D/g, ""),
        r = t.replace(/[_\d]/g, function (e) {
          return i < n.length ? n.charAt(i++) || s.charAt(i) : e;
        }),
        t =
          (-1 != (i = r.indexOf("_")) &&
            (i < 5 && (i = 3), (r = r.slice(0, i))),
          t
            .substr(0, this.value.length)
            .replace(/_+/g, function (e) {
              return "\\d{1," + e.length + "}";
            })
            .replace(/[+()]/g, "\\$&"));
      (!(t = new RegExp("^" + t + "$")).test(this.value) ||
        this.value.length < 5 ||
        (47 < a && a < 58)) &&
        (this.value = r),
        "blur" == e.type && this.value.length < 5 && (this.value = "");
    }
    e.addEventListener("input", t, !1),
      e.addEventListener("focus", t, !1),
      e.addEventListener("blur", t, !1),
      e.addEventListener("keydown", t, !1);
  });
});
