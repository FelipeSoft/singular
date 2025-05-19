<?php
class ClassRoomGroup
{
    public function __construct(
        // think about this, because each lesson could be ministered by differents teachers
        public readonly string $teacherId,


        public readonly ?string $id
    ) {}
}
