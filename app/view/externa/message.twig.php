{% extends "externa/partial.twig.php" %}

{% block body %}
<div class="main-container">
    <div class="max-width vertical-center">
      {{message}}
      <div>
      <br>
      <a href="{{BASE}}">Login</a> │ 
      <a href="{{BASE}}?url=cadastro">Cadastro</a>
      </div>
      

    </div>
</div>
{% endblock %}