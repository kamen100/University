<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>        
 	
	<form method='post' id='emp-SaveForm' action="#"> 
    <table class='table table-bordered'> 
        <tr>
            <td>Име</td>
            <td><input type='text' name='first_name' class='form-control' placeholder='Име' pattern="^[a-zA-Z0-9а-яА-Я]+$" required /></td>
        </tr>        
        <tr>
            <td>Презиме</td>
            <td><input type='text' name='midle_name' class='form-control' placeholder='Презиме' pattern="^[a-zA-Z0-9а-яА-Я]+$" required /></td>
        </tr>
        <tr>
            <td>Фамилия</td>
            <td><input type='text' name='sur_name' class='form-control' placeholder='Фамилия' pattern="^[a-zA-Z0-9а-яА-Я]+$" required /></td>
        </tr> 
        <tr>
            <td>Адрес</td>
            <td><input type='text' name='addres' class='form-control' placeholder='ул. хххххх 5'  required /></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type='text' name='email' class='form-control' placeholder='email@mail.com' required></td>
        </tr> 
        <tr>
            <td>Телефонен Номер</td>
            <td><input type='text' name='phone_number' class='form-control' placeholder='Примерно : 0888123456' pattern="^[0-9]+"required></td>
        </tr> 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Запамети
			</button>  
            </td>
        </tr>
 
    </table>
</form>