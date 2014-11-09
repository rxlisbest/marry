{% extends 'AcmeJokeBundle::base.html.twig' %}
{% block content %}
          <div class="left-sidebar">

            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      注册账号
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form method="post" action="/register/save" class="form-horizontal no-margin">
                      
                      <div class="control-group">
                        <label class="control-label">

                        </label>
                        <div class="controls controls-row">
				{% for i in app.session.getFlashBag().get("notice") %}
                                	<p><font color="red">{{ i }}</font></p>
				{% endfor %}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          昵称
                        </label>
                        <div class="controls controls-row">
				{% if(app.session.getFlashBag().has("username")) %}
                          		<input class="span8" type="text" placeholder="UserName" name="username" required="required" value="{{ app.session.getFlashBag().get("username") }}" >
				{% else %}
                          		<input class="span8" type="text" placeholder="UserName" name="username" required="required" value="" >
				{% endif %}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          邮箱
                        </label>
                        <div class="controls controls-row">
				{% if(app.session.getFlashBag().has("email")) %}
                          		<input class="span8" type="email" placeholder="Email" required="required" name="email" value="{{ app.session.getFlashBag().get("email") }}" >
				{% else %}
                          		<input class="span8" type="email" placeholder="Email" required="required" name="email" value="" >
				{% endif %}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          密码
                        </label>
                        <div class="controls controls-row">
				{% if(app.session.getFlashBag().has("password")) %}
                          		<input class="span8" type="password" placeholder="Password" name="password" required="required" value="{{ app.session.getFlashBag().get("password") }}" >
				{% else %}
                          		<input class="span8" type="password" placeholder="Password" name="password" required="required" value="" >
				{% endif %}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          确认密码
                        </label>
                        <div class="controls controls-row">
				{% if(app.session.getFlashBag().has("confirmpassword")) %}
                          		<input class="span8" type="password" placeholder="Confirm Passwrod" name="confirmpassword" required="required" value="{{ app.session.getFlashBag().get("confirmpassword") }}" >
				{% else %}
                          		<input class="span8" type="password" placeholder="Confirm Password" name="confirmpassword" required="required" value="" >
				{% endif %}
                        </div>
                      </div>
                      
                      <div class="form-actions no-margin">
                        <button type="submit" class="btn btn-info pull-right">
                          注册
                        </button>
                        <div class="clearfix">
                        </div>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
{% endblock %}
