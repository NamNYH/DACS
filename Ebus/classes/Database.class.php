<?php

class Database
{
	protected $conn;
	protected $table;

	function __construct()
	{
		$this->conn = mysqli_connect('localhost', 'root', '', 'ebus') or die ('Không thể kết nối tới database');
	}

	public function table($name)
	{
		$this->table = $name;
		return $this;
	}

	public function get()
	{
		$sql = "SELECT * FROM $this->table";
		$result = $this->query($sql);
		$list = [];
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)) {
				$list[] = $row;
			}
		}
		return $list;
	}

	public function insert($data)
	{
		$fields = implode(',', array_keys($data));
		$valueStr = implode(',', array_fill(0, count($data), '?'));
		$aVal = array_values($data);

		$sql = "INSERT INTO $this->table($fields) VALUES ($valueStr)";
		$link = $this->conn->prepare($sql);
		$link->bind_param(str_repeat('s', count($data)), ...$aVal);
		$link->execute();

		return $link->affected_rows;
	}

	public function query($sql)
	{
		$result = mysqli_query($this->conn, $sql);
		return $result;
	}

	public function __destruct()
	{
		//mysqli_close($conn);
	}
}