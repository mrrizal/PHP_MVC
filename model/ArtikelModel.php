<?php

class ArtikelModel extends App {

	public function all() {
		$sql = "SELECT * FROM `artikel` ORDER BY `id` DESC";
		$q = $this->db->prepare($sql);
		$q->execute();
		$row = $q->fetchAll();

		return $row;
	}
}
