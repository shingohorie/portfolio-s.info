const ua = navigator.userAgent.toLowerCase();

const normalizeURL = function (url) {
  if (url === void 0) return;
  if (url.indexOf(location.host) !== -1) {
    return url
      .replace(location.protocol + '//', '')
      .replace(location.host, '')
      .replace(':' + location.port, '')
      .replace(/index\.(html|php)/, '');
  } else {
    return url.replace(/index\.(html|php)/, '');
  }
};

export { ua, normalizeURL };
