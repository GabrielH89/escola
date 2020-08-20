$('.form-options input[name=menu-prof]').click(function(){
	$('.form-aluno').fadeOut(1000);
	$('.form-prof').fadeIn();
	$('.form-options input[name=menu-prof]').css('display','none');
	$('.form-options input[name=menu-aluno]').css('display', 'inline-block');
})

$('.form-options input[name=menu-aluno]').click(function(){
	$('.form-prof').fadeOut(1000);
	$('.form-aluno').fadeIn();
	$('.form-options input[name=menu-aluno]').css('display','none');
	$('.form-options input[name=menu-prof]').css('display', 'inline-block');
})

/*Funções referentes a página alunos.php*/
$('.aprovados-button input[name=hide]').click(function(){
	$('.aprovados-list').fadeOut(1000);
	$('.aprovados-button input[name=hide]').css('display','none');
	$('.aprovados-button input[name=show]').css('display','inline-block');
})

$('.aprovados-button input[name=show]').click(function(){
	$('.aprovados-list').fadeIn(1000);
	$('.aprovados-button input[name=hide]').css('display','inline-block');
	$('.aprovados-button input[name=show]').css('display','none');
})

$('.recuperacao-button input[name=hide]').click(function(){
	$('.recuperacao-list').fadeOut(1000);
	$('.recuperacao-button input[name=hide]').css('display','none');
	$('.recuperacao-button input[name=show]').css('display','inline-block');
})

$('.recuperacao-button input[name=show]').click(function(){
	$('.recuperacao-list').fadeIn(1000);
	$('.recuperacao-button input[name=hide]').css('display','inline-block');
	$('.recuperacao-button input[name=show]').css('display','none');
})

$('.reprovados-button input[name=hide]').click(function(){
	$('.reprovados-list').fadeOut(1000);
	$('.reprovados-button input[name=hide]').css('display','none');
	$('.reprovados-button input[name=show]').css('display','inline-block');
})

$('.reprovados-button input[name=show]').click(function(){
	$('.reprovados-list').fadeIn(1000);
	$('.reprovados-button input[name=hide]').css('display','inline-block');
	$('.reprovados-button input[name=show]').css('display','none');
})

/*Funções referentes aos botões de exluir*/
$('.alunos-list input[name=delete]').click(function(){
	var id = $(this).attr('id');
        var el = $(this).parent().parent();
            $.ajax({
                method:'post',
                data:{'id':id},
                url:'deletar.php'
            }).done(function(){
                el.fadeOut(function(){
                el.remove();
            });
        })                            
})

/*Funções referentes a página professores.php*/
$('.prof-button input[name=hide]').click(function(){
	$('.prof-listagem').fadeOut(1000);
	$('.prof-button input[name=hide]').css('display','none');
	$('.prof-button input[name=show]').css('display','inline-block');
})

$('.prof-button input[name=show]').click(function(){
	$('.prof-listagem').fadeIn(1000);
	$('.prof-button input[name=hide]').css('display','inline-block');
	$('.prof-button input[name=show]').css('display','none');
})










