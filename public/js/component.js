/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/component.js ***!
  \***********************************/
var setup = function setup() {
  var getTheme = function getTheme() {
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'));
    }

    return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  };

  var setTheme = function setTheme(value) {
    window.localStorage.setItem('dark', value);
  };

  return {
    loading: true,
    isDark: getTheme(),
    toggleTheme: function toggleTheme() {
      this.isDark = !this.isDark;
      setTheme(this.isDark);
    },
    setLightTheme: function setLightTheme() {
      this.isDark = false;
      setTheme(this.isDark);
    },
    setDarkTheme: function setDarkTheme() {
      this.isDark = true;
      setTheme(this.isDark);
    },
    isSettingsPanelOpen: false,
    openSettingsPanel: function openSettingsPanel() {
      var _this = this;

      this.isSettingsPanelOpen = true;
      this.$nextTick(function () {
        _this.$refs.settingsPanel.focus();
      });
    },
    isNotificationsPanelOpen: false,
    openNotificationsPanel: function openNotificationsPanel() {
      var _this2 = this;

      this.isNotificationsPanelOpen = true;
      this.$nextTick(function () {
        _this2.$refs.notificationsPanel.focus();
      });
    },
    isSearchPanelOpen: false,
    openSearchPanel: function openSearchPanel() {
      var _this3 = this;

      this.isSearchPanelOpen = true;
      this.$nextTick(function () {
        _this3.$refs.searchInput.focus();
      });
    },
    isMobileSubMenuOpen: false,
    openMobileSubMenu: function openMobileSubMenu() {
      var _this4 = this;

      this.isMobileSubMenuOpen = true;
      this.$nextTick(function () {
        _this4.$refs.mobileSubMenu.focus();
      });
    },
    isMobileMainMenuOpen: false,
    openMobileMainMenu: function openMobileMainMenu() {
      var _this5 = this;

      this.isMobileMainMenuOpen = true;
      this.$nextTick(function () {
        _this5.$refs.mobileMainMenu.focus();
      });
    }
  };
};
/******/ })()
;