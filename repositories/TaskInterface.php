<?php

interface TaskInterface {
    /**
    * Display a listing of tasks.
    */

    public function getTask();

    /**
    * Store a newly created task in the database.
    */

    public function storeTask( $title, $description, $status = 0 );

    /**
    * Update the specified task in the database.
    */

    public function updateTask( $id, $title, $description );

    /**
    * Remove the specified task from the database.
    */

    public function deleteTask( $id );

    /**
    * Mark a task as completed or incomplete.
    */
    public function taskStatus( $id );

    /**
    * get list of users.
    */
    public function getAllUsers();

    /**
    * Assign a task to a user.
    */
    public function assign( $userId, $taskId );
}
