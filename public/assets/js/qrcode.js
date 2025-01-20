var randomPerson = {
    name: 'awaiz',
    email: 'awaiz.@gmail.com',
    phone: '123-456-7890'
};
  
var qrcode = new QRCode(document.getElementById("qrcode"), {
    text: `Name: ${randomPerson.name}\nEmail: ${randomPerson.email}\nPhone: ${randomPerson.phone}`,
    width: 50,
    height: 50,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
  });