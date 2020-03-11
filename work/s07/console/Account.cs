using System.ComponentModel;
using System.Text;

namespace Bank {

    class Account {

        private int number;
        private int balance;
        private string label;
        private int owner;

        public int Owner { get => owner; set => owner = value; }
        public string Label { get => label; set => label = value; }
        public int Balance { get => balance; set => balance = value; }
        public int Number { get => number; set => number = value; }
    }
}