<?php
return [
    'categoriesAPI\\V1\\Rest\\Categories\\Controller' => [
        'collection' => [
            'GET' => [
                'description' => 'Retrieve a paginated list of categories.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories"
       },
       "first": {
           "href": "/categories?page={page}"
       },
       "prev": {
           "href": "/categories?page={page}"
       },
       "next": {
           "href": "/categories?page={page}"
       },
       "last": {
           "href": "/categories?page={page}"
       }
   }
   "_embedded": {
       "categories": [
           {
               "_links": {
                   "self": {
                       "href": "/categories[/:categories_id]"
                   }
               }
              "name": "Category name.",
              "abbreviation": "Category abbreviation.",
              "message": "A category message description of no more than 140 characters.",
              "user": "The user submitting the status message.",
              "timestamp": "The timestamp when the status message was last modified."
           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'Create a new category.',
                'request' => '{
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
            'description' => 'Manipulate lists of categories.',
        ],
        'entity' => [
            'description' => 'Manipulate and retrieve individual categories.',
            'GET' => [
                'description' => 'Retrieve a category.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
            'PATCH' => [
                'description' => 'Update a category.',
                'request' => '{
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
            'PUT' => [
                'description' => 'Replace a category.',
                'request' => '{
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
            'DELETE' => [
                'description' => 'Delete a category.',
                'request' => '{
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories[/:categories_id]"
       }
   }
   "name": "Category name.",
   "abbreviation": "Category abbreviation.",
   "message": "A category message description of no more than 140 characters.",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ],
        ],
        'description' => 'Create, list, retrieve, edit and delete categories.',
    ],
];
