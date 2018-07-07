<? php

echo $_GET['nome'];

if( isset ( $_GET['nome' ] ) ) {
	if ( $_GET['nome'] == ucwords( $_GET['nome'] ) ) {
		echo " Nome valido !";
	}
	echo " Nome Invalido !";
}

echo $_GET['nome'];

?>