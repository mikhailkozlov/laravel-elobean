<?php namespace MikhailKozlov\Elobean;

use Closure;
use Illuminate\Database\ConnectionInterface;

/**
 * Laravel DB connector
 */


class Connection implements ConnectionInterface
{
    /**
     * The SugarCRM connection handler.
     *
     * @var resource
     */
    protected $connection;

    /**
     * Create a new api connection instance.
     *
     * @param  array   $config
     * @return void
     */
    public function __construct(ApiInterface $api)
    {
        // Create the connection
        $this->connection = $api;
    }

    /**
     * Begin a fluent query against a database table.
     *
     * @param  string $table
     * @return \Illuminate\Database\Query\Builder
     */
    public function table($table)
    {
        // TODO: Implement table() method.
    }

    /**
     * Get a new raw query expression.
     *
     * @param  mixed $value
     * @return \Illuminate\Database\Query\Expression
     */
    public function raw($value)
    {
        // TODO: Implement raw() method.
    }

    /**
     * Run a select statement and return a single result.
     *
     * @param  string $query
     * @param  array $bindings
     * @return mixed
     */
    public function selectOne($query, $bindings = [])
    {
        // TODO: Implement selectOne() method.
    }

    /**
     * Run a select statement against the database.
     *
     * @param  string $query
     * @param  array $bindings
     * @return array
     */
    public function select($query, $bindings = [])
    {
        // TODO: Implement select() method.
    }

    /**
     * Run an insert statement against the database.
     *
     * @param  string $query
     * @param  array $bindings
     * @return bool
     */
    public function insert($query, $bindings = [])
    {
        // TODO: Implement insert() method.
    }

    /**
     * Run an update statement against the database.
     *
     * @param  string $query
     * @param  array $bindings
     * @return int
     */
    public function update($query, $bindings = [])
    {
        // TODO: Implement update() method.
    }

    /**
     * Run a delete statement against the database.
     *
     * @param  string $query
     * @param  array $bindings
     * @return int
     */
    public function delete($query, $bindings = [])
    {
        // TODO: Implement delete() method.
    }

    /**
     * Execute an SQL statement and return the boolean result.
     *
     * @param  string $query
     * @param  array $bindings
     * @return bool
     */
    public function statement($query, $bindings = [])
    {
        // TODO: Implement statement() method.
    }

    /**
     * Run an SQL statement and get the number of rows affected.
     *
     * @param  string $query
     * @param  array $bindings
     * @return int
     */
    public function affectingStatement($query, $bindings = [])
    {
        // TODO: Implement affectingStatement() method.
    }

    /**
     * Run a raw, unprepared query against the PDO connection.
     *
     * @param  string $query
     * @return bool
     */
    public function unprepared($query)
    {
        // TODO: Implement unprepared() method.
    }

    /**
     * Prepare the query bindings for execution.
     *
     * @param  array $bindings
     * @return array
     */
    public function prepareBindings(array $bindings)
    {
        // TODO: Implement prepareBindings() method.
    }

    /**
     * Execute a Closure within a transaction.
     *
     * @param  \Closure $callback
     * @param  int $attempts
     * @return mixed
     *
     * @throws \Throwable
     */
    public function transaction(Closure $callback, $attempts = 1)
    {
        // TODO: Implement transaction() method.
    }

    /**
     * Start a new database transaction.
     *
     * @return void
     */
    public function beginTransaction()
    {
        // TODO: Implement beginTransaction() method.
    }

    /**
     * Commit the active database transaction.
     *
     * @return void
     */
    public function commit()
    {
        // TODO: Implement commit() method.
    }

    /**
     * Rollback the active database transaction.
     *
     * @return void
     */
    public function rollBack()
    {
        // TODO: Implement rollBack() method.
    }

    /**
     * Get the number of active transactions.
     *
     * @return int
     */
    public function transactionLevel()
    {
        // TODO: Implement transactionLevel() method.
    }

    /**
     * Execute the given callback in "dry run" mode.
     *
     * @param  \Closure $callback
     * @return array
     */
    public function pretend(Closure $callback)
    {
        // TODO: Implement pretend() method.
    }


    /**
     * Dynamically pass methods to the connection.
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $parameters);
        }

        return call_user_func_array(array($this->connection, $method), $parameters);
    }
}