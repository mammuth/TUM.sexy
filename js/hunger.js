const menus = document.getElementsByClassName("hunger-menu");

if (menus.length > 0) {
  const firstMenu = menus[0];
  const firstItem = firstMenu.firstElementChild;
  firstItem.setAttribute("data-balloon-visible", true);
  setTimeout(function () {
    firstItem.removeAttribute("data-balloon-visible");
  }, 7200);
}

// relative opening hours logic
const openingHoursMap = new Proxy({}, {
  get: (target, key) =>
    key in target ? target[key] : target[key] = new opening_hours(key)
})

const setInnerHtml = prefix => el => {
  const openingHours = openingHoursMap[el.getAttribute('data-hours')]
  const open = openingHours.getState()

  /* example texts:
   *  Food/Open for 2 hours
   *  Food/Open in 1 day 6 hours
   */
  el.innerHTML = `${prefix} ${open ? 'for' : 'in'} ${moment(openingHours.getNextChange()).toNow(true)}`
}

const updateOpenTimes = () => {
  document.getElementsByClassName('opening-hours').forEach(setInnerHtml('Open'))
  document.getElementsByClassName('feeding-hours').forEach(setInnerHtml('Food'))
  document.getElementsByClassName('opening-feeding-hours').forEach(setInnerHtml('Open & Food'))
}

document.addEventListener('load', () => setInterval(updateOpenTimes, 1000 * 60))
