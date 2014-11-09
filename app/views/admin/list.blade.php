{% extends 'AcmeJokeBundle::base.html.twig' %}
{% block content %}
          <div class="left-sidebar">
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
		{% for i in Jokes %}
                    <div class="hero-unit">
			<h3>{{ i["title"] }}</h3>
			{{ i["content"] }}
                    </div>
		{% endfor %}
		{{ render(controller('AcmeJokeBundle:List:page', { 'num': JokesNum, 'perpage': perpage, 'curpage': page})) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
{% endblock %}
