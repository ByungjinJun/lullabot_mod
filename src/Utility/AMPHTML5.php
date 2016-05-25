<?php
/*
 * Copyright 2016 Google
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Lullabot\AMP\Utility;

use Masterminds\HTML5;
use Masterminds\HTML5\Parser\InputStream;

class AMPHTML5 extends HTML5
{
    /**
     * Similar to parent::parse() but we use our sub-classed tokenizer and DOM tree builder
     *
     * @param InputStream $inputstream
     * @param array $options
     * @return \DOMDocument
     */
    public function parse(InputStream $inputstream, array $options = [])
    {
        // User options override default options in $this->options
        $final_options = array_merge($this->options, $options);
        $amp_tree_builder = new AMPDOMTreeBuilder($inputstream, $final_options);
        $amp_tokenizer = new AMPTokenizer($amp_tree_builder);

        // Start reading the input stream and build the DOM tree by triggering events in the AMPDOMTreeBuilder
        $amp_tokenizer->parse();

        $this->errors = $amp_tree_builder->getErrors();

        return $amp_tree_builder->document();
    }
}
