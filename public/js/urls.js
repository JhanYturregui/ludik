function processUrls() {
  const urls = $('#textAreaUrls').text();

  const arrUrls = urls.split(',');
  const arrAuxValidUrls = arrUrls.filter((url, index) => url.endsWith('html') || url.includes('shop'));
  const arrValidUrls = arrAuxValidUrls.filter((item, index) => {
    return arrAuxValidUrls.indexOf(item) === index;
  });

  $('#textAreaResult').text(arrValidUrls.toString());
  $('#countUrls').val(arrValidUrls.length);
}