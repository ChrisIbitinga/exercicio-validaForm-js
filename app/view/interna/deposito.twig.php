{% extends 'interna/partials/partial.twig.php' %}

{% block title %}Deposito{% endblock %}

{% block body %}

<div><br>
    <div class="grid-50">
         <label for="txtValor">Valor para o depósito</label>
         <input type="text" id="txtValor" name="txtValor">
         <div class="ar">
              <input type="submit" value="Depositar" class="btn">
         </div>
   </div>  
   <div class="grid-50">
      <p class="saudo-medium">
          Saldo Atual: R$ 0,00
      </p>
  </div>   
  <div class="clear"></div>



 
</div> <!-- fexa div principal -->




<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="{{BASE}}assets/js/jquery.mask.min.js"></script>
{% endblock %}