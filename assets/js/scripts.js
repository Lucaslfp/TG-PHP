$(document).ready(function() {

    ConsultFields();

    /*-----TELA DE LOGIN-----*/
    /*Mostrar e esconder telas ocultas */
    $("#login-sistema .register-new-user").on("click", function() {
        fadeInOut($('.form-login'), $('.form-register-user'));
    });
    $("#login-sistema .forgot-password").on("click", function() {
        fadeInOut($('.form-login'), $('.form-forgot-password'));
    });
    $(".form-forgot-password #cancelar").on("click", function() {
        fadeInOut($('.form-forgot-password'),$('.form-login'));        
    });
    $(".form-register-user #cancelar").on("click", function() {
        fadeInOut($('.form-register-user'), $('.form-login'));
    });
    /*Mensagens de erro para inputs vazios na tela de login*/
    $("#entrar").on("click", function() {
        if($("#nome").val() == "") {
            $(".msg2").show();
        }
        else {
            $(".msg2").hide();
        }
        if($("#senha-login").val() == "") {
            $(".msg3").show();
        }
        else {
            $(".msg3").hide();
        }
        if($("#nome").val() == "" || $("#senha-login").val() == "") {
            $(".msg1").show();
        }
        else {
            $(".msg1").hide();
            $(".msg2").hide();
            $(".msg3").hide();
        }
    })
    /*Fim mensagens de erro para inputs vazios na tela de login*/
    /*Mensagens de erro para inputs vazios na tela de cadastro de usuário*/
    $("#cadastrar").on("click", function() {
        if($(".form-register-user #nome-usuario").val() == "") {
            $(".msg5").show();
        }
        else {
            $(".msg5").hide();
        }
        if($(".form-register-user #email-novo-usuario").val() == "") {
            $(".msg6").show();
        }
        else {
            $(".msg6").hide();
        }
        if($(".form-register-user #senha-novo-usuario").val() == "") {
            $(".msg7").show();
        }
        else {
            $(".msg7").hide();
        }
        if($(".form-register-user #senha-novo-usuario").val() != $(".form-register-user #confirma-senha").val()) {
            $(".msg8").show();
        }
        else {
            $(".msg8").hide();
        }
        if($(".form-register-user #register-options").val() == "---") {
            $(".msg9").show();
        }
        else {
            $(".msg9").hide();
        }
        if($(".form-register-user #nova-resposta-secreta").val() == "") {
            $(".msg10").show();
        }
        else {
            $(".msg10").hide();
        }
        if($(".form-register-user #permissao").val() == "") {
            $(".msg11").show();
        }
        else {
            $(".msg11").hide();
        }
        if($(".form-register-user input").val() == "") {
            $(".msg4").show();
        }
        else {
            $(".msg4").hide();
        }
    })
    /*Fim mensagens de inputs vazios na tela de cadastro de usuário*/
    /*Mensagens de inputs vazios na tela de recuperação de senha*/
    $("#recuperar-senha").on("click", function() {
        if($(".form-forgot-password #email-usuario").val() == "") {
            $(".msg13").show();
        }
        else {
            $(".msg13").hide();
        }
        if($(".form-forgot-password #select-options").val() == "---") {
            $(".msg14").show();
        }
        else {
            $(".msg14").hide();
        }
        if($(".form-forgot-password #resposta-secreta").val() == "") {
            $(".msg15").show();
        }
        else {
            $(".msg15").hide();
        }
        if($(".form-forgot-password input").val() == "") {
            $(".msg12").show();
        }
        else {
            $(".msg12").hide();
        }
    })
    /*Fim mensagens de inputs vazios na tela de recuperação de senha*/
    /*-----TELA DE LOGIN-----*/

    /*-----MENU-----*/
    if($("body").hasClass("home")) {
        $(".navbar ul a .item1").addClass("active");
    }
    if($("body").hasClass("cadastrar")) {
        $(".navbar ul a .item2").addClass("active");
    }
    if($("body").hasClass("consultar")) {
        $(".navbar ul a .item3").addClass("active");
    }
    if($("body").hasClass("relatorios")) {
        $(".navbar ul a .item4").addClass("active");
    }
    /*-----MENU-----*/

    /*-----TELA DE CADASTROS------*/
    /*Funcionalidade dos botões mais e menos*/
    $(".button #plus").on("click", function() {
        if ($('.area-imagem').length < 4){
            appendElement("<div class='area-imagem'>Espaço para imagem</div>", $(".imagem-obra"));
        }
    });
    $(".button #minus").on("click", function() {
        if($('.area-imagem').length > 1){
            removeElement($('.area-imagem:last-child'));
        }
    })
    /*Fim funcionalidade dos botoões mais e menos*/
    /*Aba 1 na tela de cadastro*/
    $(".abas .obra").on("click", function() {
        $(".obra").addClass("abas-ativo");
        $(".secao").removeClass("abas-ativo");
        $(".material").removeClass("abas-ativo");
        $(".colecao").removeClass("abas-ativo");
        $(".aba-2").hide(1000);
        $(".aba-3").hide(1000);
        $(".aba-4").hide(1000);
        $(".aba-1").slideToggle(1000);
    })
    $("#cancelar-2").on("click", function() {
        $(".aba-1").slideToggle(1000);
    })
    /*Fim aba 1 na tela de cadastro*/
    /*Aba 2 na tela de cadastro*/
    $(".abas .secao").on("click", function() {
        $(".secao").addClass("abas-ativo");
        $(".obra").removeClass("abas-ativo");
        $(".material").removeClass("abas-ativo");
        $(".colecao").removeClass("abas-ativo");
        $(".aba-1").hide(1000);
        $(".aba-3").hide(1000);
        $(".aba-4").hide(1000);
        $(".aba-2").slideToggle(1000);
    })
    $("#cancelar-3").on("click", function() {
        $(".aba-2").slideToggle(1000);
    })
    /*Fim aba 2 na tela de cadastro*/
    /*Aba 3 na tela de cadastro*/
    $(".abas .mat").on("click", function() {
        $(".material").addClass("abas-ativo");
        $(".secao").removeClass("abas-ativo");
        $(".obra").removeClass("abas-ativo");
        $(".colecao").removeClass("abas-ativo");
        $(".aba-1").hide(1000);
        $(".aba-2").hide(1000);
        $(".aba-4").hide(1000);
        $(".aba-3").slideToggle(1000);
    })
    $("#cancelar-4").on("click", function() {
        $(".aba-3").slideToggle(1000);
    })
    /*Fim aba 3 na tela de cadastro*/
    /*Aba 4 na tela de cadastro */
    $(".abas .colecao").on("click", function() {
        $(".colecao").addClass("abas-ativo");
        $(".collecti").show();
        $(".secao").removeClass("abas-ativo");
        $(".obra").removeClass("abas-ativo");
        $(".material").removeClass("abas-ativo");
        $(".aba-1").hide(1000);
        $(".aba-2").hide(1000);
        $(".aba-3").hide(1000);
        $(".aba-4").slideToggle(1000);
    })
    $("#cancelar-5").on("click", function() {
        $(".aba-4").slideToggle(1000);
    })
    /*Fim aba 4 na tela de cadastro */
    /*Mensagens de inputs vazios na tela de cadastro de obra*/
    $(".ca").on("click", function() {
        if($(".aba-1 #codigo").val() == "") {
            $(".msg16").show();
        }
        else {
            $(".msg16").hide();
        }
        if($(".aba-1 #titulo").val() == "") {
            $(".msg17").show();
        }
        else {
            $(".msg17").hide();
        }
        if($(".aba-1 #entrada").val() == "") {
            $(".msg18").show();
        }
        else {
            $(".msg18").hide();
        }
        if($(".aba-1 #autor").val() == "") {
            $(".msg19").show();
        }
        else {
            $(".msg19").hide();
        }
        if($(".aba-1 #categoria").val() == "") {
            $(".msg20").show();
        }
        else {
            $(".msg20").hide();
        }
        if($(".aba-1 .local").val() == "---") {
            $(".msg21").show();
        }
        else {
            $(".msg21").hide();
        }
        if($(".aba-1 .colecao").val() == "---") {
            $(".msg22").show();
        }
        else {
            $(".msg22").hide();
        }
        if($(".aba-1 input").val() == "") {
            $(".msg23").show();
        }
        else {
            $(".msg23").hide();
        }
    })
    /*Fim mensagens de inputs vazios na tela de cadastro de obra*/
    /*Mensagens de inputs vazios na tela de cadastro de seção*/
    $("#salvar2").on("click", function() {
        if($(".aba-2 #secao-id").val() == "") {
            $(".msg24").show();
        }
        else {
            $(".msg24").hide();
        }
    })
    /*Fim mensagens de inputs vazios na tela de cadastro de seção*/
    /*Mensagem de inputs vazios na tela de cadastro de material */
    $("#salvar3").on("click", function() {
        if($(".aba-3 #mat").val() == "") {
            $(".msg25").show();
        }
        else {
            $(".msg25").hide();
        } 
    })
    /*Fim mensagens de inputs vazios na tela de cadastro de material */
    /*Mensagens de inputs vazios na tela de cadastro de coleção*/
    $("#salvar4").on("click", function() {
        if($(".aba-4 #cole").val() == "") {
            $(".msg26").show();
        }
        else {
            $(".msg26").hide();
        }
    });

    $('.editar_colecao').on('click', function() {
       var idColecao = $(this).attr('data-doc');
       var nome = $(this).attr('data-name');
       var linkForm = './php/colecao/funcoes-colecao.php?param=editar_colecao&id=' + idColecao;
       $('.modal-header h4').text('Editar Coleção - ' + nome);
       $('.modal-body form').attr('action', linkForm);
    });

    $('.editar_secao').on('click', function() {
        var id = $(this).attr('data-doc');
        var nome = $(this).attr('data-name');
        var linkForm = './php/secao/funcoes-secao.php?param=editar&id=' + id;
        
        $('.modal-header h4').text('Editar Seção - ' + nome);
        $('.modal-body form').attr('action', linkForm);
    });

    /*Fim mensagens de inputs vazios na tela de cadastro de coleção*/
    /*------TELA DE CADASTROS-----*/
    
    //Usuario mini-menu
    $('.user-name').on('click', function() {
        var $this = $(this);
        $this.toggleClass('is--active');
        $this.parents('.user-icon').toggleClass('is--active');
    });
    
    function fadeInOut(elementOut, elementIn){
        $(elementOut).fadeOut('fast', 'linear', function(){
            $(elementIn).fadeIn('fast', 'linear');
        });
    }
    function appendElement(html, element){
        element.append(html);
    }
    function removeElement(element){
        element.remove();
    }
    function addImagePreview(input){
        if($('.imagem-obra .area-imagem').length != 0 && input.files[0]){
            $('.imagem-obra').html(''); 
        }
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('.imagem-obra').append('<div class="area-imagem spot1"><img src="" alt /></div>');
                $('.imagem-obra .area-imagem.spot1 img').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
        if(input.files && input.files[1]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('.imagem-obra').append('<div class="area-imagem spot2"><img src="" alt /></div>');
                $('.imagem-obra .area-imagem.spot2 img').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[1]);
        }
        if(input.files && input.files[2]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('.imagem-obra').append('<div class="area-imagem spot3"><img src="" alt /></div>');
                $('.imagem-obra .area-imagem.spot3 img').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[2]);
        }
        if(input.files && input.files[3]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('.imagem-obra').append('<div class="area-imagem spot4"><img src="" alt /></div>');
                $('.imagem-obra .area-imagem.spot4 img').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[3]);
        }
    }
    $(document).on('change','.cadastrar input[type="file"], .consultar input[type="file"]', function(){
        addImagePreview(this);
    });
});

function ConsultFields() {
    $("input[name=check]").change(function(){
        var maxChecks = 3;
        if( $("input[name=check]:checked").length == maxChecks ){
            $("input[name=check]").attr('disabled', 'disabled');
            $("input[name=check]:checked").removeAttr('disabled');
        } else {
             $("input[name=check]").removeAttr('disabled');
        }
    });
    $('.checkboxes').on('click', function() { 
        var $this = $(this);
        var Fields = $this.attr('id');

        if(!$this.hasClass('is--checked')) {
            switch (Fields) {
                case 'titul':
                    $('.titulos.db').before('<label for="" class="titulos">Objeto<input type="text" id="titul" name="objeto" placeholder="Título/nome da obra" /></label>');
                    break;
                case 'regist':
                    $('.titulos.db').before('<label for="" class="titulos">Código<input type="text" id="regist" name="codigo" placeholder="Código de registro da obra" /></label>');
                    break;
                case 'tom':
                    $('.titulos.db').before('<label for="" class="titulos">Tombo<input type="text" id="tom" name="tombo" placeholder="Tombo da obra" /></label>');
                    break;
                case 'collection':
                    $('.titulos.db').before('<label for="" class="titulos">Material<input type="text" id="collection" name="material" /></label>');
                    break;
                case 'init':
                    $('.titulos.db').before('<label for="" class="titulos">Data de criação<input type="date" id="init" name="data-criacao" /></label>');
                    break;
                case 'sect':
                    $('.titulos.db').before('<label for="" class="titulos">Seção<select id="sect"><option class="opt6">---</option></select></label>');
            }
            $this.addClass('is--checked');
        } else {
            $this.removeClass('is--checked');
            $this.parents('.aba-5.col-md-12').find('.titulos input[id='+ Fields +']').parent().remove();
            $this.parents('.aba-5.col-md-12').find('.titulos select[id='+ Fields +']').parent().remove();
        }
    });
}