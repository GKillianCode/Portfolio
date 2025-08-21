"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");

var body = document.querySelector("body");
var darkModeButton = document.querySelector(".theme-controller");
darkModeButton.addEventListener("click", function () {
  var isButtonCheck = darkModeButton.checked;
  if (isButtonCheck) {
    body.dataset.theme = "dark";
    localStorage.setItem("theme", "dark");
  } else {
    body.dataset.theme = "light";
    localStorage.setItem("theme", "light");
  }
});
window.addEventListener("load", function (event) {
  var savedTheme = localStorage.getItem("theme");
  if (savedTheme) {
    body.dataset.theme = savedTheme;
    if (savedTheme === "dark") {
      darkModeButton.checked = true;
    } else {
      darkModeButton.checked = false;
    }
  } else {
    body.dataset.theme = "light";
    darkModeButton.checked = false;
  }
});

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/app.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7O0FBQTBCO0FBRTFCLElBQU1BLElBQUksR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsTUFBTSxDQUFDO0FBQzNDLElBQU1DLGNBQWMsR0FBR0YsUUFBUSxDQUFDQyxhQUFhLENBQUMsbUJBQW1CLENBQUM7QUFFbEVDLGNBQWMsQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQU07RUFDM0MsSUFBTUMsYUFBYSxHQUFHRixjQUFjLENBQUNHLE9BQU87RUFFNUMsSUFBSUQsYUFBYSxFQUFFO0lBQ2ZMLElBQUksQ0FBQ08sT0FBTyxDQUFDQyxLQUFLLEdBQUcsTUFBTTtJQUMzQkMsWUFBWSxDQUFDQyxPQUFPLENBQUMsT0FBTyxFQUFFLE1BQU0sQ0FBQztFQUN6QyxDQUFDLE1BQU07SUFDSFYsSUFBSSxDQUFDTyxPQUFPLENBQUNDLEtBQUssR0FBRyxPQUFPO0lBQzVCQyxZQUFZLENBQUNDLE9BQU8sQ0FBQyxPQUFPLEVBQUUsT0FBTyxDQUFDO0VBQzFDO0FBQ0osQ0FBQyxDQUFDO0FBRUZDLE1BQU0sQ0FBQ1AsZ0JBQWdCLENBQUMsTUFBTSxFQUFFLFVBQUNRLEtBQUssRUFBSztFQUN2QyxJQUFNQyxVQUFVLEdBQUdKLFlBQVksQ0FBQ0ssT0FBTyxDQUFDLE9BQU8sQ0FBQztFQUVoRCxJQUFJRCxVQUFVLEVBQUU7SUFDWmIsSUFBSSxDQUFDTyxPQUFPLENBQUNDLEtBQUssR0FBR0ssVUFBVTtJQUUvQixJQUFJQSxVQUFVLEtBQUssTUFBTSxFQUFFO01BQ3ZCVixjQUFjLENBQUNHLE9BQU8sR0FBRyxJQUFJO0lBQ2pDLENBQUMsTUFBTTtNQUNISCxjQUFjLENBQUNHLE9BQU8sR0FBRyxLQUFLO0lBQ2xDO0VBQ0osQ0FBQyxNQUFNO0lBQ0hOLElBQUksQ0FBQ08sT0FBTyxDQUFDQyxLQUFLLEdBQUcsT0FBTztJQUM1QkwsY0FBYyxDQUFDRyxPQUFPLEdBQUcsS0FBSztFQUNsQztBQUNKLENBQUMsQ0FBQyxDOzs7Ozs7Ozs7OztBQ2hDRiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzPzZiZTYiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFwiLi9zdHlsZXMvYXBwLmNzc1wiO1xuXG5jb25zdCBib2R5ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcImJvZHlcIik7XG5jb25zdCBkYXJrTW9kZUJ1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIudGhlbWUtY29udHJvbGxlclwiKTtcblxuZGFya01vZGVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcbiAgICBjb25zdCBpc0J1dHRvbkNoZWNrID0gZGFya01vZGVCdXR0b24uY2hlY2tlZDtcblxuICAgIGlmIChpc0J1dHRvbkNoZWNrKSB7XG4gICAgICAgIGJvZHkuZGF0YXNldC50aGVtZSA9IFwiZGFya1wiO1xuICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbShcInRoZW1lXCIsIFwiZGFya1wiKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBib2R5LmRhdGFzZXQudGhlbWUgPSBcImxpZ2h0XCI7XG4gICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKFwidGhlbWVcIiwgXCJsaWdodFwiKTtcbiAgICB9XG59KTtcblxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJsb2FkXCIsIChldmVudCkgPT4ge1xuICAgIGNvbnN0IHNhdmVkVGhlbWUgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbShcInRoZW1lXCIpO1xuXG4gICAgaWYgKHNhdmVkVGhlbWUpIHtcbiAgICAgICAgYm9keS5kYXRhc2V0LnRoZW1lID0gc2F2ZWRUaGVtZTtcblxuICAgICAgICBpZiAoc2F2ZWRUaGVtZSA9PT0gXCJkYXJrXCIpIHtcbiAgICAgICAgICAgIGRhcmtNb2RlQnV0dG9uLmNoZWNrZWQgPSB0cnVlO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgZGFya01vZGVCdXR0b24uY2hlY2tlZCA9IGZhbHNlO1xuICAgICAgICB9XG4gICAgfSBlbHNlIHtcbiAgICAgICAgYm9keS5kYXRhc2V0LnRoZW1lID0gXCJsaWdodFwiO1xuICAgICAgICBkYXJrTW9kZUJ1dHRvbi5jaGVja2VkID0gZmFsc2U7XG4gICAgfVxufSk7XG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsiYm9keSIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImRhcmtNb2RlQnV0dG9uIiwiYWRkRXZlbnRMaXN0ZW5lciIsImlzQnV0dG9uQ2hlY2siLCJjaGVja2VkIiwiZGF0YXNldCIsInRoZW1lIiwibG9jYWxTdG9yYWdlIiwic2V0SXRlbSIsIndpbmRvdyIsImV2ZW50Iiwic2F2ZWRUaGVtZSIsImdldEl0ZW0iXSwic291cmNlUm9vdCI6IiJ9