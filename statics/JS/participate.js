let copylink = (link) => {
  link.selectionStart;
  link.select();
  navigator.clipboard.writeText(link.value);
  alert("link copied ; "+ link.value);
};


