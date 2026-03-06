function dumpJSON() {
  fetch('data.json')
    .then(r => r.json())
    .then(data => {
      console.log(data);
    });
}