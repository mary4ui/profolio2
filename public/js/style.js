// function setLanguage(language) {
//     // إرسال اللغة إلى السيرفر لتغيير اللغة
//     fetch(/lang/$,{language}, {
//         method: 'GET',
//         headers: {
//             'Accept': 'application/json',
//         }
//     }).then(response => response.json())
//     .then(data => {
//         // تحديث النصوص بناءً على اللغة المختارة
//         document.getElementById("home-link").textContent = data.home;
//         document.getElementById("services-link").textContent = data.services;
//         document.getElementById("about-link").textContent = data.about;
//         document.getElementById("contact-link").textContent = data.contact;
//     });
// }