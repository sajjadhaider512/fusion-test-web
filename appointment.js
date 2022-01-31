function sendEmail() {
  Email.send({
      Host: "smtp.gmail.com",
       Username: "sajjadhaider1020@gmail.com",
       Password: "PAKistan110",
      // SecureToken: "Generate token here",
      From: document.getElementById('email').value,
      To: 'alee.hayder512@gmail.com',
      Subject: document.getElementById('subjects').value,
      Body:  document.getElementById('message').value
  })
      .then(function (response) {
        if(response == "OK"){
          alert("mail sent successfully")
        } else {
          alert(response.statusText);
          throw new Error("Error :" + response);
        }
          
      });
}