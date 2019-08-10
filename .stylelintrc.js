module.exports = {
  extends: "stylelint-config-standard",
  rules: {
    "no-empty-source": null,
    'color-no-invalid-hex': null,
    'color-hex-length': null,
    "string-quotes": "double",
    "at-rule-no-unknown": [
      true,
      {
        ignoreAtRules: [
          "extend",
          "at-root",
          "debug",
          "warn",
          "error",
          "if",
          "else",
          "for",
          "each",
          "while",
          "mixin",
          "include",
          "content",
          "return",
          "function",
          "tailwind",
          "apply",
          "responsive",
          "variants",
          "screen"
        ]
      }
    ],
  }
};
