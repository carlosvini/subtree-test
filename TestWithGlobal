
if (is_null($value)) {
    return $value;
}

switch ($this->getCastType($key)) {
    case 'int':
    case 'integer':
        return (int) $value;
    case 'real':
    case 'float':
    case 'double':
        return (float) $value;
    case 'string':
        return (string) $value;
    case 'bool':
    case 'boolean':
        return (bool) $value;
    case 'object':
        return $this->fromJson($value, true);
    case 'array':
    case 'json':
        return $this->fromJson($value);
    case 'collection':
        return new BaseCollection($this->fromJson($value));
    case 'date':
    case 'datetime':
        return $this->asDateTime($value);
    case 'timestamp':
        return $this->asTimeStamp($value);
    default:
        return $value;
}
