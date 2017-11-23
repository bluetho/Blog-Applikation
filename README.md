# Blog-Applikation

* [Jonas Etter](https://github.com/bluetho) 
* [Timon Hansen](https://github.com/timon3355)


## Link für XSS
http://php.net/manual/en/function.strip-tags.php

## Beispiel SQL Injection
$password = sha1 ( $password );
		
		$query = "INSERT INTO $this->tableName (name, passwort, email) VALUES (?, ?, ?)";
		
		$statement = ConnectionHandler::getConnection ()->prepare ( $query );
		$statement->bind_param ( 'sss', $benutzername, $password, $email );
		
		if (! $statement->execute ()) {
			throw new Exception ( $statement->error );
