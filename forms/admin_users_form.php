<fieldset>
    <!-- Form Name -->
    <legend>Conta</legend>
    <!-- Text input USUARIO-->
    <div class="form-group">
        <label class="col-md-4 control-label">Usuario</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  type="text" name="user_name" placeholder="user name" class="form-control" value="<?php echo ($edit) ? $admin_account['user_name'] : ''; ?>" autocomplete="off">
            </div>
        </div>
    </div>
    <!-- Text input SENHA-->
    <div class="form-group">
        <label class="col-md-4 control-label" >Senha</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="passwd" placeholder="Password " class="form-control" autocomplete="off">
            </div>
        </div>
    </div>
	
	<!-- radio buttons TIPO CONTA -->
	<div class="form-group">
        <label class="col-md-4 control-label">Acesso</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="user_type" value="admin" required="" <?php echo ($edit && $admin_account['user_type'] =='admin') ? "checked": "" ; ?>/> Admin
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="user_type" value="cliente" required="" <?php echo ($edit && $admin_account['user_type'] =='cliente') ? "checked": "" ; ?>/> Cliente
                </label>
            </div>
        </div>
    </div>
	
	<legend>Dados Pessoais</legend>
	<!-- Text input NOME COMPLETO-->
	<div class="form-group">
        <label class="col-md-4 control-label" >Nome e sobrenome</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <input type="text" name="nome" placeholder="Nome Sobrenome " class="form-control" required="" autocomplete="on" value="<?php echo ($edit) ? $admin_account['nome'] : ''; ?>">
            </div>
        </div>
    </div>
		<!-- Text input NOME COMPLETO-->
	<div class="form-group">
        <label class="col-md-4 control-label" >Telefone</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="text" name="fone" placeholder="(xx)99998888" class="form-control" required="" autocomplete="on" value="<?php echo ($edit) ? $admin_account['fone'] : ''; ?>">
            </div>
        </div>
    </div>
		<!-- Text input NOME COMPLETO-->
	<div class="form-group">
        <label class="col-md-4 control-label" >Email</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" name="email" placeholder="email@exemplo.com" class="form-control" required="" autocomplete="on" value="<?php echo ($edit) ? $admin_account['email'] : ''; ?>">
            </div>
        </div>
    </div>
	
	<legend>Serviços</legend>
	<!-- whatsapp -->
	<div class="form-group">
        <label class="col-md-4 control-label">Whatsapp</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="acesso_whats" value="1" required="" <?php echo ($edit && $admin_account['acesso_whats'] =='1') ? "checked": "" ; ?>/> Ativado
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="acesso_whats" value="0" required="" <?php echo ($edit && $admin_account['acesso_whats'] =='0') ? "checked": "" ; ?>/> Desativado
                </label>
            </div>
        </div>
    </div>
	
	<!-- whatsapp -->
	<div class="form-group">
        <label class="col-md-4 control-label">Email</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="acesso_mail" value="1" required="" <?php echo ($edit && $admin_account['acesso_mail'] =='1') ? "checked": "" ; ?>/> Ativado
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="acesso_mail" value="0" required="" <?php echo ($edit && $admin_account['acesso_mail'] =='0') ? "checked": "" ; ?>/> Desativado
                </label>
            </div>
        </div>
    </div>
	
	<!-- whatsapp -->
	<div class="form-group">
        <label class="col-md-4 control-label">SMS</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="acesso_sms" value="1" required="" <?php echo ($edit && $admin_account['acesso_sms'] =='1') ? "checked": "" ; ?>/> Ativado
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="acesso_sms" value="0" required="" <?php echo ($edit && $admin_account['acesso_sms'] =='0') ? "checked": "" ; ?>/> Desativado
                </label>
            </div>
        </div>
    </div>
	
	<!-- whatsapp -->
	<div class="form-group">
        <label class="col-md-4 control-label">Chatbot</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="acesso_bot" value="1" required="" <?php echo ($edit && $admin_account['acesso_bot'] =='1') ? "checked": "" ; ?>/> Ativado
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="acesso_bot" value="0" required="" <?php echo ($edit && $admin_account['acesso_bot'] =='0') ? "checked": "" ; ?>/> Desativado
                </label>
            </div>
        </div>
    </div>
	<br>
	<!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Salvar <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
</fieldset>