using System;
using System.Collections.Generic;
using System.IO;
using System.Text.Json;

namespace Bank
{
    class Program
    {
        static void Main(string[] args)
        {
            Program program = new Program();
            program.Menu();
        }

        private void Menu () 
        {
            var accounts = ReadAccounts();

            Console.WriteLine("- - - - Welcome to your bank - - - -");

            while (true) {
                
                Console.Write("1) View Accounts\n2) View Account by number\n0) Exit\nPrompt: ");

                string consoleLine = Console.ReadLine();
                int menuChoice;
                bool parseInt = int.TryParse(consoleLine, out menuChoice);
                Console.WriteLine("");

                if (parseInt) {

                    switch (menuChoice) {

                        case 0:

                        Environment.Exit(0);

                        break;

                        case 1:
                            
                            Console.WriteLine("  - - - - - - - - - - - - - - - - - -");
                            Console.WriteLine("| {0,-6} | {1,-6} | {2,-8} | {3,-7} |", "Number", "Owner", "Balance", "Label");
                            Console.WriteLine("  - - - - - - - - - - - - - - - - - -");
                            foreach (var account in accounts) {
                                Console.WriteLine("| {0,-6} | {1,-6} | {2,-8} | {3,-7} |", account.Number, account.Owner, account.Balance, account.Label);  
                            }
                            Console.WriteLine("  - - - - - - - - - - - - - - - - - -");
                            Console.WriteLine("");
                        break;

                        case 2:

                            Console.Write("Enter account number: ");
                            consoleLine = Console.ReadLine();
                            int accountNumber;
                            parseInt = int.TryParse(consoleLine, out accountNumber);

                            if (parseInt) {

                            bool exists = false;
                            
                            foreach (var account in accounts) {

                                if (account.Number == accountNumber) {
                                    Console.WriteLine("  - - - - - - - - - - - - - - - - - -");
                                    Console.WriteLine("| {0,-6} | {1,-6} | {2,-8} | {3,-7} |", "Number", "Owner", "Balance", "Label");
                                    Console.WriteLine("  - - - - - - - - - - - - - - - - - -");
                                    Console.WriteLine("| {0,-6} | {1,-6} | {2,-8} | {3,-7} |", account.Number, account.Owner, account.Balance, account.Label); 
                                    Console.WriteLine("  - - - - - - - - - - - - - - - - - -");
                                    Console.WriteLine("");
                                    exists = true;
                                }
                                 
                            }

                            if (!exists) {
                            Console.WriteLine("Account does not exists");
                            Console.WriteLine("");
                            }

                            }
                        break;

                    }
                }
            }
        }

        static IEnumerable<Account> ReadAccounts()
        {
            String file = "../../data/account.json";

            using (StreamReader r = new StreamReader(file))
            {
                string data = r.ReadToEnd();

                var json = JsonSerializer.Deserialize<Account[]>(
                    data,
                    new JsonSerializerOptions {
                        PropertyNameCaseInsensitive = true
                    }
                );

                return json;
            }
        }
    }
}
