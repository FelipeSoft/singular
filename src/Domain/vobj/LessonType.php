<?php
namespace Src\Domain\ValueObjects;

enum LessonType: int { 
    case THEORICAL = 0;
    case PRACTICAL = 1;
    case REPLACEMENT = 2;
    case EVALUATIVE = 3;
}