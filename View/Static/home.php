

<main role="main" class="inner cover">
	<h1 class="cover-heading">Configuração da Estrutura</h1>
	</p>
</main>

<div class="container"> 
	<div class="tab-content">
		<div class="tab-pane fade show active" id="nav-tab-card">
			<p class="alert alert-danger"><b>CONFIGURAÇÂO É NECESSARIA</b></p>
			<form id="form" role="form" action="write-data" method="POST">

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="username">Estrutura do diretorio</label>
						<input type="text" class="form-control" id="dir" name="dir" placeholder="/exemplo/framework-sync-idie" required="">
					
					</div>
					<div class="form-group col-md-6">
						<label for="username">Alterar nome</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="framework-sync-idie para meu-projeto">						
					</div>
				</div> 
				<button class="subscribe btn btn-primary btn-block" type="submit"> Confirmar  </button>

			</form>
		</div> <!-- tab-pane.// -->
	</div>
</div>


<!--


   form.addEventListener('submit', function(e) {
        // alerta o valor do campo

      //alert(dir.value);

		const xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
					
					let data = JSON.parse(this.responseText);
					
					if (dir.value.substr(0, 1) != "/") {
						dir.value = "/" + dir.value;
					}
					
					if (dir.value.substr(dir.value.length -1, dir.value.length) != "/") {	
						dir.value = dir.value + "/";
					}

					data.app = dir.value;

					alert(data.app);
					document.getElementById("demo").innerHTML = data.app;
					

						//Define o formulário
						var myForm = document.createElement("form");
						myForm.action = "write-data";
						myForm.method = "post";

						for(var key in obj) {
							var input = document.createElement("input");
							input.type = "text";
							input.value = obj[key];
							input.name = key;
							myForm.appendChild(input);			
						}

						//Adiciona o form ao corpo do documento
						document.body.appendChild(myForm);
						//Envia o formulário
						myForm.submit();
					
				

			}
		};
		xmlhttp.open("GET", "view/static/database.json", true);
		xmlhttp.send();

						<div class="form-group">
							<label for="cardNumber">Card number</label>
							<div class="input-group">
								<input type="text" class="form-control" name="cardNumber" placeholder="">
								<div class="input-group-append">
									<span class="input-group-text text-muted">
										<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
										<i class="fab fa-cc-mastercard"></i> 
									</span>
								</div>
							</div>
						</div> 

						<div class="row">
							<div class="col-sm-8">
								<div class="form-group">
										<label><span class="hidden-xs">Expiration</span> </label>
									<div class="input-group">
										<input type="number" class="form-control" placeholder="MM" name="">
										<input type="number" class="form-control" placeholder="YY" name="">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
									<input type="number" class="form-control" required="">
								</div> 
							</div>
						</div> 


		  	
	-->