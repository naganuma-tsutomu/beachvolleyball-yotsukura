document.addEventListener('DOMContentLoaded', function () {

  const member05 = document.querySelector('.confirm-member-05');
  const member06 = document.querySelector('.confirm-member-06');
console.log(member05);
  if (member05) {
    const add05 = member05.querySelector('.confirm-add')?.textContent.trim();
    if (add05 !== 'する') {
      member05.style.display = 'none';
    }
  }

  if (member06) {
    const add06 = member06.querySelector('.confirm-add')?.textContent.trim();
    if (add06 !== 'する') {
      member06.style.display = 'none';
    }
  }
});