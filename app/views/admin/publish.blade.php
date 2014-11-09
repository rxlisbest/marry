{% extends 'AcmeJokeBundle::base.html.twig' %}
{% block content %}
          <div class="left-sidebar">

            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Event registration for<a id="redgForm">m</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <form class="form-horizontal no-margin">
                      
                      <div class="control-group">
                        <label class="control-label">
                          用户名
                        </label>
                        <div class="controls controls-row">
                          <input class="span8" type="text" placeholder="UserName" name="username">
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          Address
                        </label>
                        <div class="controls">
                          <input class="span4" type="text" placeholder="Address">
                          <span class="help-inline ">
                            Enter your Address
                          </span>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="stateAndCity">
                          State and City
                        </label>
                        <div class="controls">

                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">
                          Zip Code
                        </label>
                        <div class="controls">
                          <input class="span4" type="text" placeholder="Zip Code">
                          <span class="help-inline ">
                            Enter your Zip Code
                          </span>
                        </div>
                      </div>
                      
                      <div class="control-group error">
                        <label class="control-label">
                          Phone
                        </label>
                        <div class="controls">
                          <input class="span4" type="text" placeholder="Phone">
                          <span class="help-inline ">
                            Enter your Phone Number
                          </span>
                        </div>
                      </div>
                      <div class="control-group success">
                        <label class="control-label" for="email2">
                          Email
                        </label>
                        <div class="controls">
                          <div class="input-prepend">
                            <span class="add-on">
                              @
                            </span>
                            <input class="span12" id="email2" type="text" placeholder="Email">
                          </div>
                          
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" value="d">
                            Remember Me :)
                          </label>
                        </div>
                      </div>
                      
                      <div class="form-actions no-margin">
                        <button type="submit" class="btn btn-info pull-right">
                          Registar
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
