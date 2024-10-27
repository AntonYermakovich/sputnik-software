const menuIcon = document.querySelector(".header__icon");
const menu = document.querySelector(".menu");

menuIcon.addEventListener("click", openMenu);

function openMenu() {
  if (this.classList.contains("header__icon_show")) {
    this.classList.remove("header__icon_show");
    menu.classList.remove("menu_show");
  } else {
    this.classList.add("header__icon_show");
    menu.classList.add("menu_show");
  }
}

// tabs and collapse
const tabs = document.querySelectorAll(".tab");
const mess = document.querySelectorAll(".about__mess");
const collapses = document.querySelectorAll(".collapse");

// tabs
tabs.forEach((tab) => tab.addEventListener("click", changeTabHandler));

function changeTabHandler() {
  deleteActiveClassForTab();
  this.classList.add("tab_active");
  mess[this.dataset.tabid].classList.add("about__mess_show");
}

function deleteActiveClassForTab() {
  tabs.forEach((tab) => tab.classList.remove("tab_active"));
  mess.forEach((m) => m.classList.remove("about__mess_show"));
}

// collapse
tabs.forEach((tab) => tab.addEventListener("click", openCollapse));

function openCollapse() {
  const collapse = this.nextElementSibling;
  if (collapse.style.maxHeight) {
    collapse.style.maxHeight = null;
    this.classList.remove("tab_active");
  } else {
    collapses.forEach((c) => (c.style.maxHeight = null));
    collapse.style.maxHeight = collapse.scrollHeight + "px";
    this.classList.add("tab_active");
  }
}
function openFirstElement() {
  const firstEl = tabs[0].nextElementSibling;
  firstEl.style.maxHeight = firstEl.scrollHeight + "px";
}

tabs.length && openFirstElement();

// Slider
document.querySelector(".splide") &&
  document.addEventListener("DOMContentLoaded", function () {
    new Splide("#thumbnail-carousel", {
      perPage: 5,
      gap: 50,
      rewind: true,
      pagination: false,
      arrows: false,
      type: "loop",
      breakpoints: {
        992: {
          perPage: 3,
          padding: '5rem',
        },
        540: {
          perPage: 1,
          padding: '5rem',
          gap: 20
        },
      },
    }).mount();
  });

// Send form to mail
const form = document.getElementById("form-id");
const btnForm = document.getElementById('btn')

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = {
    name: e.target.name.value,
    company: e.target.company.value,
    bot: `Bot ${e.target.bot.value}`,
    message: e.target.message.value,
    phone: e.target.phone.value,
  };
  console.log(formData);

  const res = await fetch('mail.php', {
    method: 'POST',
    body: JSON.stringify(formData),
    headers: {
      'Content-Type': 'application/json; charset=UTF-8'
    }
  })
  const data = await res.text()
  alert(data)
});


const phone = document.getElementById("phone");
const maskOptions = {
  mask: "+{7}(000) 000-00-00",
  lazy: false,
};
const mask = IMask(phone, maskOptions);

phone.addEventListener("input", phoneInputHandler);

function phoneInputHandler() {
  if (mask.masked.isComplete) {
    btnForm.removeAttribute('disabled')
  } else btnForm.setAttribute('disabled', 'true')
}