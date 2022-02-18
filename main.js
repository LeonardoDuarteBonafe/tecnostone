window.addEventListener("DOMContentLoaded", function () {

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
          delay: 1000,
          disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
            spaceBetween: 20,
          },  
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
        },
    });

    $('.whatsapp').click(function(){
        window.open('https://api.whatsapp.com/send?phone=5528998855718&text=Ol%C3%A1%2C+tenho+interesse+no+seu+produto!', '_blank'); 
    });

    class MobileNavbar{
        constructor(mobileMenu, navList, navLinks){
            this.mobileMenu = document.querySelector(mobileMenu);
            this.navList = document.querySelector(navList);
            this.navLinks = document.querySelectorAll(navLinks);
            this.activeClass = "active";
            this.handleClick = this.handleClick.bind(this);
        }

        animateLinks(){
            this.navLinks.forEach((link, index) => {
                link.style.animation ? (link.style.animation = "") : (link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + 0.3}s`);
            });
        }

        handleClick(){
            this.navList.classList.toggle(this.activeClass);
            this.mobileMenu.classList.toggle(this.activeClass);
            this.animateLinks();
        }

        addClickEvent(){
            this.mobileMenu.addEventListener("click", this.handleClick);
        }

        init(){
            if(this.mobileMenu){
                this.addClickEvent();
            }
        }
    }

    const mobileNavbar = new MobileNavbar(
        ".mobile-menu",
        ".nav-list",
        ".nav-list li",
    );

    mobileNavbar.init();

    $('.buttonEmail').click(function(){
        getFormInfos();
    });

    $('.cores .info .opcoes-cores div').click(function(){
        console.log($(this).attr('id'));
        var imagemPainelUrl = "Images/Index/Cores/";
        var corClicada = $(this).attr('id');

        $('.cores .info .painel').children("img").eq(0).attr('src', imagemPainelUrl + corClicada + '.webp');

        $('.cores .info .painel').children("img").eq(0).addClass('active-material-painel');
        $('.cores .info .painel').children("img").eq(0).on("animationend", function(){
            $(this).removeClass('active-material-painel');
        });
        
        $('.cores .info .painel h1').text($(this).attr('product-name'));
        
    })

    function getFormInfos(){
        var emailMessage = "";
        var nome = document.querySelector('#nome').value;
        var email = document.querySelector('#email').value;
        var telefone = document.querySelector('#telefone').value;
        var setor = document.querySelector('#setor').value;
        var mensagem = document.querySelector('#mensagem').value;

        emailMessage += "Nome: " + nome + ". <br>";
        emailMessage += "Email: " + email + ". <br>";
        emailMessage += "Telefone: " + telefone + ". <br>";
        emailMessage += "Setor: " + setor + ". <br>";
        emailMessage += "Mensagem: " + mensagem + ". <br>";

        console.log('teste click');
        if(nome === "" || email === ""){
            var pageLanguage = localStorage.getItem("language");
            if(pageLanguage == "eng"){
                document.getElementsByName('nome')[0].placeholder='Please insert your NAME!';
                document.getElementsByName('email')[0].placeholder='Please insert your EMAIL!';
            }
            else{
                document.getElementsByName('nome')[0].placeholder='Por favor, insira seu NOME!';
                document.getElementsByName('email')[0].placeholder='Por favor, insira seu EMAIL!';
            }
            $('.form-nome').addClass('form-required');
            $('.form-email').addClass('form-required');
        }
        else{

            sendEmail(nome, email, emailMessage);
        }
    }

    function sendEmail(name, email, message){
        Email.send({
            Host: "smtp.gmail.com",
            //Username: 'ldbmaildealer@gmail.com',
            Username: 'leonardodbonafe@gmail.com',
            //Password: "jzkocqnlqfdoeuhr",
            Password: "ppbnvpviefcyquhu",
            //To: `adm2@margilgranitos.com.br`,
            To: 'thiago@tecnostone.com.br',
            From: 'ldbmaildealer@gmail.com',
            Subject: `${name} tem interesse no seu produto!`,
            Body: `${message}`,
        }).then(function(message){
            var pageLanguage = localStorage.getItem("language");
            if(pageLanguage == "eng"){
                alert("Your email was sent successfully");
            }
            else{
                alert("Seu email foi enviado com sucesso");
            }
            window.location.reload(false); 
        }); 
    }
});