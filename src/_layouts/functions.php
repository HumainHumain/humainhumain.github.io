<?php


function replaceSchemaPlaceholders($data, array $replacements)
{
    // Objets (stdClass, cas par défaut de json_decode($json))
    if (is_object($data)) {
        $result = new stdClass();
        foreach ($data as $key => $value) {
            $result->$key = replaceSchemaPlaceholders($value, $replacements);
        }
        return $result;
    }

    // Tableaux (associatifs ou indexés, cas json_decode($json, true) ou listes JSON)
    if (is_array($data)) {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key] = replaceSchemaPlaceholders($value, $replacements);
        }
        return $result;
    }

    if (is_string($data)) {
        // Cas 1 : la chaîne EST exactement un placeholder -> remplace par la valeur brute
        // (utile si la valeur de remplacement est un array, bool, int, etc.)
        if (preg_match('/^###([A-Z0-9_]+)###$/', $data, $matches)) {
            $key = $matches[1];
            return array_key_exists($key, $replacements) ? $replacements[$key] : $data;
        }

        // Cas 2 : la chaîne contient un ou plusieurs placeholders mêlés à du texte
        return preg_replace_callback('/###([A-Z0-9_]+)###/', function ($m) use ($replacements) {
            $key = $m[1];
            if (!array_key_exists($key, $replacements)) {
                return $m[0]; // placeholder inconnu, laissé tel quel
            }
            $value = $replacements[$key];
            return is_scalar($value) ? (string) $value : $m[0]; // évite d'insérer un array dans une chaîne
        }, $data);
    }

    // int, float, bool, null -> rien à faire
    return $data;
}