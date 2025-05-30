<?php
namespace Src\Domain\ValueObjects;

enum LessonStatus: int { 
    case PENDING = 0;
    case MINISTERED = 1;
    case CANCELED = 2;
}