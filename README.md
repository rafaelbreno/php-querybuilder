### _Kery_
- This project __SHOULDN'T/CAN'T__ be used in __PRODUCTION__
- Just a personal project to help with my studies
#### Presentation
- This package is a simple Query Builder
- Developing following the structure based on [Laravel's Schema]()
- _Example:_
- What if you wanted the following query:
    - ```sql
      SELECT name, age, books FROM author
      ```
- Pretty simple:
    -   ```php
        $query = Kery::init('authors', function (Builder $builder) {
            $builder->select('name', 'age', 'books');
        });
        ``` 
- Maybe a little more