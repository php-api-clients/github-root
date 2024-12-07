<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal\Operators;
use ApiClients\Client\GitHub\Schema\ClassroomAssignment;

final class Classroom
{
    public function __construct(public Operators $operators)
    {
    }

    /** @return */
    public function getAnAssignment(int $assignmentId): ClassroomAssignment
    {
        return $this->operators->classroom👷GetAnAssignment()->call($assignmentId);
    }

    /** @return Observable<ClassroomAcceptedAssignment> */
    public function listAcceptedAssignmentsForAnAssignment(int $assignmentId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAcceptedAssignmentsForAnAssignment()->call($assignmentId, $page, $perPage);
    }

    /** @return Observable<ClassroomAssignmentGrade> */
    public function getAssignmentGrades(int $assignmentId): iterable
    {
        return $this->operators->classroom👷GetAssignmentGrades()->call($assignmentId);
    }

    /** @return Observable<SimpleClassroom> */
    public function listClassrooms(int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListClassrooms()->call($page, $perPage);
    }

    /** @return */
    public function getAClassroom(int $classroomId): \ApiClients\Client\GitHub\Schema\Classroom
    {
        return $this->operators->classroom👷GetAClassroom()->call($classroomId);
    }

    /** @return Observable<SimpleClassroomAssignment> */
    public function listAssignmentsForAClassroom(int $classroomId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAssignmentsForAClassroom()->call($classroomId, $page, $perPage);
    }
}
